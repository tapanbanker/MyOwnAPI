pipeline {
  agent any
  stages {
    stage('complie') {
      steps {
        build(job: 'complie', propagate: true, quietPeriod: 16)
      }
    }
  }
}