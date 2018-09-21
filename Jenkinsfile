pipeline {
    agent any
    stages {
        stage('Create Image Builder') {
          steps {
            script {
              openshift.withCluster() {
                openshift.withProject(test-cicd) {
                  openshift.newBuild("--name=tasks", "--image-stream=jboss-eap70-openshift:1.5", "--binary=true")
                }
              }
            }
          }
        }
        stage('CreateProject') {
            steps {
                sh "echo create"
            }
        }
        stage('Test') {
            steps {
                sh "echo stage Test"
            }
        }
        stage('Deploy') {
            steps {
                sh "echo stage deploy"
            }
        }
    }
}
