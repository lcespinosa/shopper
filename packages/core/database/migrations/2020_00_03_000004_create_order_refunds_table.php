<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Shopper\Core\Helpers\Migration;

return new class() extends Migration
{
    public function up(): void
    {
        Schema::create($this->getTableName('order_refunds'), function (Blueprint $table): void {
            $this->addCommonFields($table);

            $table->longText('refund_reason')->nullable();
            $table->string('refund_amount')->nullable();
            $table->string('status')->default(\Shopper\Core\Enum\OrderRefundStatus::Awaiting->value);
            $table->longText('notes');

            $this->addForeignKey($table, 'order_id', $this->getTableName('orders'), false);
            $this->addForeignKey($table, 'user_id', 'users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists($this->getTableName('order_refunds'));
    }
};
