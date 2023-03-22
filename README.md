Readme

        Скачиваем docker


        С корня проекта запускаем команду:
            -> docker-compose up --build -d

        Заходим в php контейнер с помощью команды: 
           -> docker-compose exec backend bash
        
        Из под контейнера запускаем команды: 
            -> composer install
            
            -> php init
            
            -> php yii migrate
         
            Заходим в http://localhost:21080/todo