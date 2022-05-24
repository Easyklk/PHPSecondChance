<?php

interface Protocolo {

    const CR_ERROR_SELECT = '{"code":"CR_ERROR","value":"ERROR_SELECT"}';
    const CR_ERROR_INSERT = '{"code":"CR_ERROR","value":"ERROR_INSERT"}';
    const CR_ERROR_PARAM = '{"code":"CR_ERROR","value":"ERROR_PARAM"}';
    const CR_OK_INSERT = '{"code":"CR_OK","value":"OK_INSERT"}';
    const CR_OK_DELETE = '{"code":"CR_OK","value":"OK_DELETE"}';
    const CR_ERROR_KP_REPETED = '{"code":"CR_ERROR","value":"ERROR_KP_DUPLICATED"}';

}
