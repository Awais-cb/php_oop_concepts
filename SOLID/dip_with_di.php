<?php
// UserRepositoryInterface defines the contract for a user repository
interface UserRepositoryInterface {
    public function getUserById($id);
}

// Concrete implementation of UserRepositoryInterface
class MySQLUserRepository implements UserRepositoryInterface {
    public function getUserById($id) {
        // Database query to fetch user by id from MySQL
        return "User fetched from MySQL with ID: $id";
    }
}

// Another concrete implementation of UserRepositoryInterface
class MongoDBUserRepository implements UserRepositoryInterface {
    public function getUserById($id) {
        // Database query to fetch user by id from MongoDB
        return "User fetched from MongoDB with ID: $id";
    }
}

// UserService depends on UserRepositoryInterface
class UserService {
    private $userRepository;
    
    // Constructor injection
    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository = $userRepository;
    }
    
    public function getUserById($id) {
        // Delegate fetching user to UserRepositoryInterface implementation
        return $this->userRepository->getUserById($id);
    }
}

// Usage
$mysqlRepository = new MySQLUserRepository();
$mongoDBRepository = new MongoDBUserRepository();

$userServiceMySQL = new UserService($mysqlRepository);
$userServiceMongoDB = new UserService($mongoDBRepository);

echo $userServiceMySQL->getUserById(123); // Outputs: User fetched from MySQL with ID: 123
echo "<br>";
echo $userServiceMongoDB->getUserById(456); // Outputs: User fetched from MongoDB with ID: 456
