pipeline {
    agent any

    stages {
        stage('Clone Repo') {
            steps {
                git branch: 'main', url: 'https://github.com/vamshik2506/ansible.git'
            }
        }

        stage('Run Ansible Playbook') {
            steps {
               sh 'ansible-playbook -i inventory.txt site.yml'

            }
        }
    }
}
