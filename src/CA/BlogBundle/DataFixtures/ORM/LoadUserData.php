<?php
namespace CA\BlogBundle\DataFixtures\ORM;

use CA\BlogBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUserData implements FixtureInterface {
	public function load(ObjectManager $manager) {
		$hashed = 'vqX4JgBHNrDbE93kn2IUHwrJ1t6cSxm3Unh7i/Pys0O7s+bvxdVNpJ9SJi8jN6q0hQfsFURotqTnd+h9aJ6sFQ==';
		$userBlogger = new User();
		$userBlogger->setUsername('Martin');
		$userBlogger->setPassword($hashed);
		$userBlogger->setMail('martin@coding.eu');
		$userBlogger->setRoles(["ROLE_BLOGGER"]);

		$hashed_2 = "eBmrfp7LiZI5QF58rF1A3Os8AzjHkyMOTgwIU4AM18psHl51ido1U7cgtalz4LjrwEuB6IYTdtPC8k+/KSlEyQ==";
		$userAdmin = new User();
		$userAdmin->setUsername('Gecko');
		$userAdmin->setPassword($hashed_2);
		$userAdmin->setMail('gecko@coding.eu');
		$userAdmin->setRoles(["ROLE_ADMIN"]);

		$manager->persist($userAdmin);
		$manager->persist($userBlogger);
		$manager->flush();
	}
}

?>