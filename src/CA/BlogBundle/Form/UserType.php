<?php

namespace CA\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType {
	/**
	 * {@inheritdoc}
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {

		$builder
			->add('username', TextType::class )
			->add('password', RepeatedType::class , array(
				'type'            => PasswordType::class ,
				'invalid_message' => 'The password fields must match.',
				'options'         => array('attr'         => array('class'         => 'password-field')),
				'required'        => true,
				'error_bubbling'  => true,
				'first_options'   => array('label'   => 'Password'),
				'second_options'  => array('label'  => 'Repeat Password'),
			))
			->add('mail', EmailType::class , array(
				'error_bubbling' => true
			));

	}

	/**
	 * {@inheritdoc}
	 */
	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefaults(array(
				'data_class' => 'CA\BlogBundle\Entity\User',
			));
	}

	/**
	 * {@inheritdoc}
	 */
	public function getBlockPrefix() {
		return 'ca_blogbundle_user';
	}
}
