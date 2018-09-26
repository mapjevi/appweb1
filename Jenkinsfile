pipeline {
    agent any
    stages {

        stage('Deploy APP from Github') {
          steps {
            script {
              openshift.withCluster() {
                openshift.withProject("ticforum2018") {
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
