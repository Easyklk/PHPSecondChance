<?php

interface Protocolo {

    const CR_ERROR_SELECT = '{"code":"CR_ERROR","value":"ERROR_SELECT"}';
    const CR_ERROR_INSERT = '{"code":"CR_ERROR","value":"ERROR_INSERT"}';
    const CR_ERROR_PARAM = '{"code":"CR_ERROR","value":"ERROR_PARAM"}';
    const CR_ERROR_KP_REPETED = '{"code":"CR_ERROR","value":"ERROR_KP_DUPLICATED"}';
    const CR_OK_INSERT = 'OK_INSERT';
    const CR_OK_DELETE = 'OK_DELETE';

}
