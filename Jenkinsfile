pipeline {
    agent any
    stages {
        stage('Create New APP') {
          steps {
            script {
              openshift.withCluster() {
                openshift.withProject("test-cicd") {
                  def app = openshift.newApp("jboss-eap70-openshift:1.5")
                  ///// def app = openshift.newApp("rails-postgresql-example")
                  ///// def app = openshift.newApp("sso72-https")
                  app.narrow("svc").expose();
                }
              }
            }
          }
        }
    }
}
