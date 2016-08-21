module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer')({browsers: 'last 2 versions'})
        ],
        dist: {
          src: 'style.css'
        }
      }
    },
    sass: {
      dist: {
        options: {
          style: 'expanded',
          require: 'susy'
        },
        files: {
          'style.css' : 'sass/style.scss'
        }
      }
    },
    concat: {
      dist: {
        src: ['js/*.js'],
        dest: 'js/main.js'
      }
    },
    uglify: {
      options: {
        mangle: false
      },
      my_target: {
        files: {
          'js/main.js' : ['js/main.min.js']
        }
      }
    },
    watch: {
      options: {
        livereload: true
      },
      css: {
        files: '**/*.scss',
        tasks: ['sass'],
        options: {
          interrupt: true
        }
      },
      js: {
        files: "src/js/*.js",
        tasks: ['concat', 'uglify']
      },
      reload: {
        files: [
          "*.php",
          "js/*.js",
          "sass/**/*.scss"
        ]
      },
      post: {
        files: 'style.css',
        tasks: ['postcss']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-htmlmin');
  grunt.loadNpmTasks('grunt-critical');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');

  grunt.registerTask('dev', ['sass', 'postcss', 'watch']);
  grunt.registerTask('build', ['concat', 'uglify', 'sass', 'postcss']);

};