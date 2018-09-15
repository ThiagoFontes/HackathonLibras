<?php

/**
 * Methods for database handling.
 */
class DB extends SQLite3 {

    const DATABASE_NAME = 'users.db';
    const BCRYPT_COST = 14;

    /**
     * DB class constructor. Initialize method is called, which will create users table if it does
     * not exist already.
     */
    function __construct() {
        $this->open(self::DATABASE_NAME);
        $this->initialize();
    }

    /**
     * Creates the table if it does not exist already.
     */
    protected function initialize() {
        $sql = 'CREATE TABLE IF NOT EXISTS user (
                  username STRING UNIQUE NOT NULL,
                  password STRING NOT NULL,
                  email VARCHAR(255) NULL,
                  create_time TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
                  max_scores INT NULL
                )';

        $this->exec($sql);

        $sql = 'CREATE TABLE IF NOT EXISTS sinais (
                  pt_title VARCHAR(45) NOT NULL,
                  gif_url VARCHAR(45) NOT NULL,
                  description LONGTEXT NULL,
                  PRIMARY KEY (pt_title)
                )';

        $this->exec($sql);
    }

    /**
     * Authenticates the given user with the given password. If the user does not exist, any action
     * is performed. If it exists, its stored password is retrieved, and then password_verify
     * built-in function will check that the supplied password matches the derived one.
     *
     * @param $username The username to authenticate.
     * @param $password The password to authenticate the user.
     * @return True if the password matches for the username, false if not.
     */
    public function authenticateUser($username, $password) {
        if ($this->userExists($username)) {
            $storedPassword = $this->getUsersPassword($username);

            if (password_verify($password, $storedPassword)) {
                $authenticated = true;
            } else {
                $authenticated = false;
            }
        } else {
            $authenticated = false;
        }

        return $authenticated;
    }

    /**
     * Checks if the given users exists in the database.
     *
     * @param $username The username to check if exists.
     * @return True if the users exists, false if not.
     */
    protected function userExists($username) {
        $sql = 'SELECT COUNT(*) AS count
                FROM   user
                WHERE  username = :username';

        $statement = $this->prepare($sql);
        $statement->bindValue(':username', $username);

        $result = $statement->execute();
        $row = $result->fetchArray();

        $exists = ($row['count'] === 1) ? true : false;

        $statement->close();

        return $exists;
    }

    /**
     * Gets given users password.
     *
     * @param $username The username to get the password of.
     * @return The password of the given user.
     */
    protected function getUsersPassword($username) {
        $sql = 'SELECT password
                FROM   user
                WHERE  username = :username';

        $statement = $this->prepare($sql);
        $statement->bindValue(':username', $username);

        $result = $statement->execute();
        $row = $result->fetchArray();
        $password = $row['password'];

        $statement->close();

        return $password;
    }

    /**
     * Creates a new user.
     *
     * @param $username The username to create.
     * @param $password The password of the user.
     */
    public function createUser($username, $password) {
        $sql = 'INSERT INTO user
                VALUES (:username, :password, :email, :create_time, :max_scores)';

        $options = array('cost' => self::BCRYPT_COST);
        $derivedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

        $statement = $this->prepare($sql);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $derivedPassword);

        $statement->execute();

        $statement->close();
    }

    /**
    * Create sinal
    */
     public function createSinal($pt_title, $gif_url) {
        $sql = 'INSERT INTO sinais
                VALUES (:pt_title, :gif_url, :description)';


        $statement = $this->prepare($sql);
        $statement->bindValue(':pt_title', $pt_title);
        $statement->bindValue(':gif_url', $gif_url);

        $statement->execute();

        $statement->close();
    }

    /**
    * List users
    *
    */
    public function listUsers() {
        $sql = 'SELECT * FROM user';
        $statement = $this->prepare($sql);
        $result = $statement->execute();
        while($r = $result->fetchArray()) {
          $rows['listUsers'][] = $r;
        }
        print json_encode($rows);
    }

    /**
    *List Sinais
    */
    public function listSinais() {
      $sql = 'SELECT * FROM sinais';
      $statement = $this->prepare($sql);
      $result = $statement->execute();
      while($r = $result->fetchArray()) {
         $rows['sinais'][] = $r;
      }
      print json_encode($rows);
    }

    /**
    * Get User
    */
    public function getUser($username) {
      $sql = 'SELECT * FROM user WHERE  username = :username';
      $statement = $this->prepare($sql);
      $statement->bindValue(':username', $username);
      $result = $statement->execute();
      $row = $result->fetchArray();
      print json_encode($row);
    }

    /**
    * Get Sinal
    */
    public function getSinal($pt_title ) {
      $sql = 'SELECT * FROM sinais WHERE  pt_title = :pt_title';
      $statement = $this->prepare($sql);
      $statement->bindValue(':pt_title', $pt_title);
      $result = $statement->execute();
      $row = $result->fetchArray();
      print json_encode($row);
    }

    /**
    * Rename signal
    */
    public function rename($oldname, $newname) {
      $sql = 'UPDATE sinais SET pt_title=:newname WHERE  pt_title = :oldname';
      $statement = $this->prepare($sql);
      $statement->bindValue(':newname', $newname);
      $statement->bindValue(':oldname', $oldname);
      $statement->execute();
    }

    public function searchSinais($search) {
      $sql = 'SELECT * FROM sinais WHERE pt_title LIKE :search';
      $statement = $this->prepare($sql);
      $statement->bindValue(':search', '%'.$search.'%');
      $result = $statement->execute();
      while($r = $result->fetchArray()) {
         $rows['sinais'][] = $r;
      }
      print json_encode($rows);
    }
}