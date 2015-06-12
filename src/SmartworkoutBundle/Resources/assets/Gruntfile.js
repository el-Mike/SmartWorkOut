module.exports = function (grunt) {
    grunt.initConfig({
        less: {
            development: {
                options: {
                    paths: ["assets/less"]
                },
                files: {
                    "../public/css/layout.css": "less/layout.less"
                }
            }
            /*production: {
                options: {
                    paths: ["assets/less"],
                    cleancss: true
                },
                files: {
                    "../public/css/layout.css": "assets/less/layout.less"
                }
            }*/
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.registerTask('default', ['less']);
};