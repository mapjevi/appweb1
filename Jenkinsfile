pipeline {
    agent any
    stages {


        stage('Create New Project') {
          steps {
            script {
              openshift.withCluster() {
		def project = openshift.NewProject("testprojectcicd") 
              }
            }
          }
        }

        stage('Create New APP') {
          steps {
            script {
              openshift.withCluster() {
                openshift.withProject("testprojectcicd") {
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
