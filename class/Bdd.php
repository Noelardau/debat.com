<?php

    class Bdd{


        public static function addUser($bdd,$pseudo,$mot_de_pass)
        {
            $mot_de_pass = sha1($mot_de_pass);
            $req = $bdd->prepare('INSERT INTO users(pseudo,mot_de_pass) VALUES(?,?)');

            $req->execute([

               $pseudo , $mot_de_pass

            ]);

            $req->closeCursor();

        }

        public static function checkUser($bdd,$pseudo,$mot_de_pass){

            $mot_de_pass = sha1($mot_de_pass);
            $req = $bdd->prepare('SELECT * FROM users WHERE pseudo= ? AND mot_de_pass= ?');

            $req->execute([

                $pseudo,$mot_de_pass

            ]);

            return $req->rowCount() == 1;

            

        }

        public static function getId($bdd,$pseudo,$mot_de_pass){
            $mot_de_pass = sha1($mot_de_pass);
            $req = $bdd->prepare('SELECT * FROM users WHERE pseudo= ? AND mot_de_pass= ?');

            $req->execute([

                $pseudo,$mot_de_pass

            ]);

            return $req->fetch()['id'];



        }

        public static function sendMessage($bdd,$id,$contenu,$datee){

            $req = $bdd->prepare('INSERT INTO messages(idSender,content,dateEnvoi) VALUES(?,?,?)');

            $req->execute([

                $id,$contenu,$datee

            ]);

        }


        public static function getMessage($bdd){
          $req = $bdd->query('SELECT * FROM messages  ORDER BY id DESC');
            return $req->fetchAll();
           
        }
            public static function getPseudo($bdd,$id){

                $req = $bdd->prepare('SELECT pseudo FROM users WHERE id = ?');
                $req->execute([
                    $id
                ]);
                return $req->fetch()['pseudo'];
                
                }
    







        






    }

