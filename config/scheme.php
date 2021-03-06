<?php

/*
 * Описание настроек плагина для интерфейса редактирования
 */
$config['$config_scheme$'] = array(
    'per_page' => array(
        /*
         * тип: integer, string, array, boolean, float
         */
        'type'        => 'integer',
        /*
         * отображаемое имя параметра, ключ языкового файла
         */
        'name'        => 'config.per_page.name',
        /*
         * отображаемое описание параметра, ключ языкового файла
         */
        'description' => 'config.per_page.description',
        /*
         * валидатор
         */
        'validator'   => array(
            /*
             * тип валидатора, существующие типы валидаторов движка:
             * Boolean, Compare, Date, Email, Number, Regexp, Required, String, Tags, Type, Url, дополнительные: Array и Enum (специальные валидаторы, см. документацию)
             */
            'type'   => 'Number',
            /*
             * параметры, которые будут переданы в валидатор
             */
            'params' => array(
                'min'         => 1,
                'max'         => 100,
                /*
                 * разрешить только целое число
                 */
                'integerOnly' => true,
                /*
                 * не допускать пустое значение
                 */
                'allowEmpty'  => false,
            ),
        ),
    ),
    'notify_mail_list'       => array(
        'type'              => 'array',
        'name'              => 'config.notify_mail_list.name',
        'description'       => 'config.notify_mail_list.description',
        'validator'         => array(
            'type'   => 'Array',
            'params' => array(
                'item_validator' => array(
                    'type'   => 'Email',
                    'params' => array(
                        'allowEmpty' => false,
                    ),
                ),
                'allowEmpty'     => true,
            ),
        ),
    ),
);


/**
 * Описание разделов для настроек
 * Каждый раздел группирует определенные параметры конфига
 */
$config['$config_sections$'] = array(
    /**
     * Настройки раздела
     */
    array(
        /**
         * Название раздела
         */
        'name'         => 'config_sections.main',
        /**
         * Список параметров для отображения в разделе
         */
        'allowed_keys' => array(
            'per_page',
            'notify_mail_list',
        ),
    ),
);

return $config;