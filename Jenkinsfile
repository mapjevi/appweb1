pipeline {
    agent any
    stages {
        stage('Create New APP') {
          steps {
            script {
              openshift.withCluster() {
                openshift.withProject("test-cicd") {
                  def app = openshift.newApp("rails-postgresql-example:lastest")
                  app.narrow("svc").expose();
                }
              }
            }
          }
        }
    }
}
