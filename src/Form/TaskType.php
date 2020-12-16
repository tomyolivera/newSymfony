<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, [
                'attr' => ['class' => 'input-customize', '@keyup' => 'checkField', '@keyup.enter' => 'disabled = true']
            ])
            ->add('description', null, [
                'attr' => ['class' => 'input-customize']
            ])
            ->add('date_for', DateType::class)
            ->add('save', SubmitType::class, [
                'attr' => ['class' => 'button-green btn-block my-3', ':disabled' => "disabled", '@click' => 'disableBtn']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}