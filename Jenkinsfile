pipeline {
    agent any
    stages {
        stage('Create New APP') {
          steps {
            script {
              openshift.withCluster() {
                openshift.withProject("test-cicd") {
                  ///// def app = openshift.newApp("rails-postgresql-example")
                  ///// def app = openshift.newApp("sso72-https")
                  def app = openshift.newApp("https://github.com/giondo/appweb1")
                  app.narrow("svc").expose();
                }
              }
            }
          }
        }
    }
}
