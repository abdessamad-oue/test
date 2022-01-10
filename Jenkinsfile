pipeline {

    agent any

    stages {

        stage("Init") {
            steps {
                echo "initialize the application"

                script {
                    def check = 10 > 1 ? 'cool' : 'not cool'
                    echo check
                }
            }
        }

        stage("Unit Test") {
            steps {
                echo "run unit tests"
            }
        }

        stage("Build") {
            steps {
                echo "Build the application"
            }
        }
    }
}

node {
    // groovy script
}