pipeline {
    agent any

        stage('Clone Repo') {
            steps {
                 git url: 'https://github.com/vamshik2506/ansible.git'
                }
             }


        stage('Run Ansible Playbook') {
            steps {
                sh 'ansible-playbook -i inventory/hosts deploy.yml'
            }
        }
    }
}
