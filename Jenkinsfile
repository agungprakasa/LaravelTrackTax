pipeline {
  agent any
  stages {
  stage('Code Quality Check via SonarQube') {  
            environment {    
              SONAR_SCANNER = tool('Sonar Scanner')
            } 
            steps {  
                script {    
                    withSonarQubeEnv("Sonarqube Server") {
                      sh """${SONAR_SCANNER}/bin/sonar-scanner \
                        -Dsonar.sources=. \
                        -Dsonar.projectKey=laraveldev \
                        -Dsonar.host.url=${env.SONAR_HOST_URL} \
                        -Dsonar.login=fd4a7caca1f080fda4444cef90c450fdc4c4320b""" 
                    }   
                } 
            }
        }
  }
}