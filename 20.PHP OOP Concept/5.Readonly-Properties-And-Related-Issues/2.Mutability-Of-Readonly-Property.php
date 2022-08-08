<?php
    class UserProfile{
        public function __construct(string $name, string $phone){

        }
        public function changePhoneNumber(string $phone){
            $this->phone = $phone;
        }
    }

    class User{
        private readonly string $user_name;
        private readonly UserProfile $user_profile;

        public function __construct(string $user_name){
            $this->user_name = $user_name;
        }
        public function setProfile(UserProfile $user_profile){
            $this->user_profile = $user_profile;
        }
        public function profile_info():UserProfile{
            return $this->user_profile;
        }

    }
    $user = new User('Kameron Holv');
    $user->setProfile(new UserProfile('Jonathan Razel', '+990-4533-121'));
    $user->profile_info()->changePhoneNumber('+990-5411-022');
    var_dump($user->profile_info());
?>