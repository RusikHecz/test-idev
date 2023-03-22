Readme

        First of all, download docker


        Run the command from the project root:
            -> docker-compose up --build -d

        Enter php container using the command: 
           -> docker-compose exec backend bash
        
        Run commands from under the container: 
            -> composer install
            
            -> php init
            
            -> php yii migrate
         
            Enter into http://localhost:21080/todo