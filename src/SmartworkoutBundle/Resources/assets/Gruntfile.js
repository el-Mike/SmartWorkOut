module.exports = function (grunt) {
    grunt.initConfig({
        less: {
            development: {
                options: {
                    paths: ["assets/less"],
                    compress: true
                },
                files: {
                    "../public/css/layout.css": "less/layout.less",
                    "../public/css/homepage.css": "less/homepage.less"
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