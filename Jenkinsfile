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
               sh 'ANSIBLE_HOST_KEY_CHECKING=False ansible-playbook -i inventory/hosts site.yml'

            }
        }
    }
}
