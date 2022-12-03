<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class StorageProcedureSpGenerarCodigo extends Migration
{
    public function up()
    {
        $procedure = "
        CREATE PROCEDURE sp_generar_codigo()
        BEGIN
            declare contador INT;
            declare p_codigo_secundario VARCHAR(7);
            SET contador = (SELECT COUNT(*)+1 FROM productos); 
            if(contador<10) then
                SET p_codigo_secundario= CONCAT('PRO000',contador);
                ELSE IF(contador<100) THEN
                    SET p_codigo_secundario= CONCAT('PRO00',contador);
                    ELSE IF(contador<1000)THEN
                        SET p_codigo_secundario= CONCAT('PRO0',contador);
                        ELSE IF(contador<10000)THEN
                            SET p_codigo_secundario= CONCAT('PRO0',contador);
                        END if;
                    END if;
                END if;
            END if;
            SELECT p_codigo_secundario AS 'codigo';
        END
        ";
        DB::unprepared($procedure);
    }

    public function down()
    {
        $procedure = "DROP PROCEDURE IF EXISTS sp_generar_codigo";
        DB::unprepared($procedure);
    }
}
