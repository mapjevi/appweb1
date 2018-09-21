pipeline {
    agent any
    stages {
        stage('CreateProject') {
            steps {
                sh " oc login"
                sh " oc new-project pipelineproject"
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
