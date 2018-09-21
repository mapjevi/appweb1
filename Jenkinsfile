pipeline {
    agent any
    stages {
        stage('Create New APP') {
          steps {
            script {
              openshift.withCluster() {
                openshift.withProject("test-cicd") {
                  openshift.newApp("jboss-eap70-openshift:1.5")
                }
              }
            }
          }
        }
    }
}
