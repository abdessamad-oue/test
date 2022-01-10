pipeline {

    agent any

    stages {

        stage("Init") {
            steps {
                echo "initialize the application"
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