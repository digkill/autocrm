<?php

namespace ApiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class HireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('startDate', DateType::class,
            ['format' => 'dd.MM.yyyy',
                'widget' => 'single_text',]
        )
            ->add('endDate', DateType::class,
                ['format' => 'dd.MM.yyyy',
                    'widget' => 'single_text',]
            )
            ->add('returnDate', DateType::class,
                ['format' => 'dd.MM.yyyy',
                    'widget' => 'single_text',]
            )->add('status')->add('car')->add('point')->add('customer')->add('worker');
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
        return 'apibundle_hire';
    }


}
