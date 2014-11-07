module.exports = (grunt) ->
  grunt.initConfig
    requirejs:
      compile:
        options:
          baseUrl: 'public/js'
          name: 'app_modules'
          out: 'public/js/app_bundle.js'
          paths: {
            jquery: "empty:"
            bootstrap: "empty:"
          }
    clean: ["public/js", "public/img", "public/css"]
    coffee:
      compile:
        expand: true
        cwd: 'app/assets/js'
        src: ['**/*.coffee']
        dest: 'public/js'
        ext: '.js'
    less:
      main:
        files:
          'public/css/style.css': 'app/assets/css/style.less'
    copy:
      dev:
        files:
          'public/js/app_bundle.js': 'public/js/app_modules.js'
      main:
        files: [
          {
            expand: true
            cwd: 'app/assets/css'
            src: ['**/*.css']
            dest: 'public/css'
          }
          {
            expand: true
            cwd: 'app/assets/fonts'
            src: ['**/*.*']
            dest: 'public/fonts'
          }
          {
            expand: true
            flatten: true
            src: [
              'bower_components/bootstrap/dist/css/bootstrap.min.css'
            ]
            dest: 'public/css'
          }
          {
            expand: true
            flatten: true
            src: [
              'app/assets/css/images/*'
            ]
            dest: 'public/css/images'
          }
          {
            expand: true
            flatten: true
            src: [
              'bower_components/bootstrap/dist/js/bootstrap.min.js'
              'bower_components/requirejs/require.js'
              'bower_components/jquery/dist/jquery.min.js'
              'bower_components/jquery/dist/jquery.min.map'
            ]
            dest: 'public/js/lib'
          }
          {
            expand: true
            cwd: 'app/assets/img'
            src: [ '*' ]
            dest: 'public/img'
          }
        ]

  grunt.loadNpmTasks task for task in [
    'grunt-contrib-uglify'
    'grunt-contrib-requirejs'
    'grunt-contrib-clean'
    'grunt-contrib-coffee'
    'grunt-contrib-copy'
    'grunt-contrib-watch'
    'grunt-contrib-less'
  ]

  grunt.registerTask 'default', ['clean', 'copy:main', 'coffee', 'less', 'requirejs']
  grunt.registerTask 'dev', ['clean', 'coffee', 'less', 'copy:main', 'copy:dev']