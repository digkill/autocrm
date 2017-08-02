<?php

namespace CRMBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class HireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('startDate', DateType::class,
            ['format' => 'dd.MM.yyyy',
                'widget' => 'single_text']
        )
            ->add('endDate', DateType::class,
                ['format' => 'dd.MM.yyyy',
                    'widget' => 'single_text']
            )
            ->add('status',
                ChoiceType::class,
                ['empty_data' => '1',


                    'choices' => [
                        'NEW' => 0,
                        'PAID' => 1,
                        'TAKEN' => 2,
                        'RETURNED' => 3,
                        'CANCELED' => 4,
                        'ERROR' => 5


                    ],

                ]
            )
            ->add('car', EntityType::class, array(
                'class' => 'ApiBundle:Car',
                'required' => true,
                'choice_label' => 'number',

            ))
            ->add('point', EntityType::class, array(
                'class' => 'ApiBundle:Point',
                'required' => true,
                'choice_label' => 'name',
            ))
            ->add('customer', EntityType::class, array(
                'class' => 'ApiBundle:Customer',
                'required' => true,
                'choice_label' => 'name',
            ))
            ->add('worker', EntityType::class, array(
                'class' => 'ApiBundle:Worker',
                'required' => true,
                'choice_label' => 'name',
            ))
            ->add('cost', MoneyType::class,
                ['divisor' => 100,
                    'currency' => 'RUB'
                ]
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ApiBundle\Entity\Hire'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'crmbundle_hire';
    }


}
