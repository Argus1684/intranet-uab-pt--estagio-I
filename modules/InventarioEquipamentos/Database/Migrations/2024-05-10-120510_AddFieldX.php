<?php

namespace Modules\InventarioEquipamentos\Database\Migrations;

use CodeIgniter\Database\Migration;
use Modules\InventarioEquipamentos\Models\EquipamentoModel;

class AddFieldX extends Migration
{
    public function up()
    {
        $this->forge->addColumn(EquipamentoModel::TABLE, [
            'teste'=>[
                'type'=>'VARCHAR',
                'constraint'=>250,
            ]
            ]);
    }

    public function down()
    {
        $this->forge->dropColumn(EquipamentoModel::TABLE, ['teste']);
    }
}
