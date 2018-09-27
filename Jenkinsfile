pipeline {
    agent any
    stages {

        stage('Deploy APP from Github') {
          steps {
            script {
              openshift.withCluster() {
                openshift.withProject("ticforum2018-html") {
		  def app1 = openshift.selector( "bc", "appweb1")
		  def app1Exists = app1.exists()
                  if (!app1Exists) {

                           def created = openshift.newApp("https://github.com/giondo/appweb1.git","httpd")
                           echo "new-app created ${created.count()} objects named: ${created.names()}"
                           created.describe()
                           def bc = created.narrow('bc')

                           def result = bc.logs('-f')

                           echo "The logs operation require ${result.actions.size()} oc interactions"

                           echo "Logs executed: ${result.actions[0].cmd}"

                           def logsString = result.actions[0].out
                           def logsErr = result.actions[0].err

			   created.narrow("svc").expose();
                      } else {
			   def buildSelector = app1.startBuild()
			   buildSelector.logs('-f')

                      }
                }
              }
            }
          }
        }
    }
}
