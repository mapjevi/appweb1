pipeline {
    agent any
    stages {

        stage('Deploy APP from Github') {
          steps {
            script {
              openshift.withCluster() {
                openshift.withProject("ticforum2018") {
                  def app = openshift.newApp("https://github.com/giondo/appweb1.git","httpd")
                  ///// def app = openshift.newApp("jboss-eap70-openshift:1.5")
                  ///// def app = openshift.newApp("rails-postgresql-example")
                  ///// def app = openshift.newApp("sso72-https")
                  app.narrow("svc").expose();
                  
		  def dc = app.object()
                  // dc is not a Selector -- It is a Groovy Map which models the content of the DC
                  // new-app created at the time object() was called. Changes to the model are not
                  // reflected back to the API server, but the DC's content is at our fingertips.
                  echo "new-app created a ${dc.kind} with name ${dc.metadata.name}"
                  echo "The object has labels: ${dc.metadata.labels}"
                }
              }
            }
          }
        }
    }
}
