module.exports = function (grunt) {
    grunt.initConfig({
        cssmin: {
            dist: {
                files: [
                    { src: 'public/assets/css/style.css', dest: 'public/assets/css/style.css' }
                ]
            }
        }
    });

    // Load the plugins
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // Default tasks
    grunt.registerTask('default', ['cssmin']);
};