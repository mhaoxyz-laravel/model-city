<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('province_id')->unsigned();
            $table->foreign('province_id')->references('id')->on('provinces');

            $table->string('name');

            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
        });

        $provinces = '[{"id":1,"name":"\u5317\u4eac\u76f4\u8f96\u5e02","cities":[{"id":1,"province_id":"1","name":"\u660c\u5e73\u533a"},{"id":2,"province_id":"1","name":"\u671d\u9633\u533a"},{"id":3,"province_id":"1","name":"\u5d07\u6587\u533a"},{"id":4,"province_id":"1","name":"\u5927\u5174\u533a"},{"id":5,"province_id":"1","name":"\u4e1c\u57ce\u533a"},{"id":6,"province_id":"1","name":"\u623f\u5c71\u533a"},{"id":7,"province_id":"1","name":"\u4e30\u53f0\u533a"},{"id":8,"province_id":"1","name":"\u6d77\u6dc0\u533a"},{"id":9,"province_id":"1","name":"\u6000\u67d4\u533a"},{"id":10,"province_id":"1","name":"\u95e8\u5934\u6c9f\u533a"},{"id":11,"province_id":"1","name":"\u5bc6\u4e91\u533a"},{"id":12,"province_id":"1","name":"\u5e73\u8c37\u533a"},{"id":13,"province_id":"1","name":"\u77f3\u666f\u5c71\u533a"},{"id":14,"province_id":"1","name":"\u987a\u4e49\u533a"},{"id":15,"province_id":"1","name":"\u901a\u5dde\u533a"},{"id":16,"province_id":"1","name":"\u897f\u57ce\u533a"},{"id":17,"province_id":"1","name":"\u5ba3\u6b66\u533a"},{"id":18,"province_id":"1","name":"\u5ef6\u5e86\u533a"}]},{"id":2,"name":"\u4e0a\u6d77\u76f4\u8f96\u5e02","cities":[{"id":19,"province_id":"2","name":"\u5b9d\u5c71\u533a"},{"id":20,"province_id":"2","name":"\u957f\u5b81\u533a"},{"id":21,"province_id":"2","name":"\u5d07\u660e\u53bf"},{"id":22,"province_id":"2","name":"\u5949\u8d24\u533a"},{"id":23,"province_id":"2","name":"\u8679\u53e3\u533a"},{"id":24,"province_id":"2","name":"\u9ec4\u6d66\u533a"},{"id":25,"province_id":"2","name":"\u5609\u5b9a\u533a"},{"id":26,"province_id":"2","name":"\u91d1\u5c71\u533a"},{"id":27,"province_id":"2","name":"\u9759\u5b89\u533a"},{"id":28,"province_id":"2","name":"\u5362\u6e7e\u533a"},{"id":29,"province_id":"2","name":"\u95f5\u884c\u533a"},{"id":30,"province_id":"2","name":"\u5357\u6c47\u533a"},{"id":31,"province_id":"2","name":"\u6d66\u4e1c\u65b0\u533a"},{"id":32,"province_id":"2","name":"\u666e\u9640\u533a"},{"id":33,"province_id":"2","name":"\u9752\u6d66\u533a"},{"id":34,"province_id":"2","name":"\u677e\u6c5f\u533a"},{"id":35,"province_id":"2","name":"\u5f90\u6c47\u533a"},{"id":36,"province_id":"2","name":"\u6768\u6d66\u533a"},{"id":37,"province_id":"2","name":"\u95f8\u5317\u533a"}]},{"id":3,"name":"\u5929\u6d25\u76f4\u8f96\u5e02","cities":[{"id":38,"province_id":"3","name":"\u5b9d\u577b\u533a"},{"id":39,"province_id":"3","name":"\u5317\u8fb0\u533a"},{"id":40,"province_id":"3","name":"\u6ee8\u6d77\u65b0\u533a"},{"id":41,"province_id":"3","name":"\u5927\u6e2f\u533a"},{"id":42,"province_id":"3","name":"\u4e1c\u4e3d\u533a"},{"id":43,"province_id":"3","name":"\u6c49\u6cbd\u533a"},{"id":44,"province_id":"3","name":"\u548c\u5e73\u533a"},{"id":45,"province_id":"3","name":"\u6cb3\u5317\u533a"},{"id":46,"province_id":"3","name":"\u6cb3\u4e1c\u533a"},{"id":47,"province_id":"3","name":"\u6cb3\u897f\u533a"},{"id":48,"province_id":"3","name":"\u7ea2\u6865\u533a"},{"id":49,"province_id":"3","name":"\u84df\u53bf"},{"id":50,"province_id":"3","name":"\u6d25\u5357\u533a"},{"id":51,"province_id":"3","name":"\u9759\u6d77\u53bf"},{"id":52,"province_id":"3","name":"\u5357\u5f00\u533a"},{"id":53,"province_id":"3","name":"\u5b81\u6cb3\u53bf"},{"id":54,"province_id":"3","name":"\u5858\u6cbd\u533a"},{"id":55,"province_id":"3","name":"\u6b66\u6e05\u533a"},{"id":56,"province_id":"3","name":"\u897f\u9752\u533a"}]},{"id":4,"name":"\u91cd\u5e86\u76f4\u8f96\u5e02","cities":[{"id":57,"province_id":"4","name":"\u5df4\u5357\u533a"},{"id":58,"province_id":"4","name":"\u5317\u789a\u533a"},{"id":59,"province_id":"4","name":"\u74a7\u5c71\u53bf"},{"id":60,"province_id":"4","name":"\u957f\u5bff\u533a"},{"id":61,"province_id":"4","name":"\u57ce\u53e3\u53bf"},{"id":62,"province_id":"4","name":"\u5927\u6e21\u53e3\u533a"},{"id":63,"province_id":"4","name":"\u5927\u8db3\u53bf"},{"id":64,"province_id":"4","name":"\u57ab\u6c5f\u53bf"},{"id":65,"province_id":"4","name":"\u4e30\u90fd\u53bf"},{"id":66,"province_id":"4","name":"\u5949\u8282\u53bf"},{"id":67,"province_id":"4","name":"\u6daa\u9675\u533a"},{"id":68,"province_id":"4","name":"\u5408\u5ddd\u533a"},{"id":69,"province_id":"4","name":"\u6c5f\u5317\u533a"},{"id":70,"province_id":"4","name":"\u6c5f\u6d25\u533a"},{"id":71,"province_id":"4","name":"\u4e5d\u9f99\u5761\u533a"},{"id":72,"province_id":"4","name":"\u5f00\u53bf"},{"id":73,"province_id":"4","name":"\u6881\u5e73\u53bf"},{"id":74,"province_id":"4","name":"\u5357\u5cb8\u533a"},{"id":75,"province_id":"4","name":"\u5357\u5ddd\u5e02"},{"id":76,"province_id":"4","name":"\u5f6d\u6c34\u82d7\u65cf\u571f\u5bb6\u65cf\u81ea\u6cbb\u53bf"},{"id":77,"province_id":"4","name":"\u7da6\u6c5f\u53bf"},{"id":78,"province_id":"4","name":"\u9ed4\u6c5f\u533a"},{"id":79,"province_id":"4","name":"\u8363\u660c\u53bf"},{"id":80,"province_id":"4","name":"\u6c99\u576a\u575d\u533a"},{"id":81,"province_id":"4","name":"\u77f3\u67f1\u571f\u5bb6\u65cf\u81ea\u6cbb\u53bf"},{"id":82,"province_id":"4","name":"\u53cc\u6865\u533a"},{"id":83,"province_id":"4","name":"\u94dc\u6881\u53bf"},{"id":84,"province_id":"4","name":"\u6f7c\u5357\u53bf"},{"id":85,"province_id":"4","name":"\u4e07\u76db\u533a"},{"id":86,"province_id":"4","name":"\u4e07\u5dde\u533a"},{"id":87,"province_id":"4","name":"\u5deb\u5c71\u53bf"},{"id":88,"province_id":"4","name":"\u5deb\u6eaa\u53bf"},{"id":89,"province_id":"4","name":"\u6b66\u9686\u53bf"},{"id":90,"province_id":"4","name":"\u79c0\u5c71\u571f\u5bb6\u65cf\u82d7\u65cf\u81ea\u6cbb\u53bf"},{"id":91,"province_id":"4","name":"\u6c38\u5ddd\u533a"},{"id":92,"province_id":"4","name":"\u9149\u9633\u571f\u5bb6\u65cf\u82d7\u65cf\u81ea\u6cbb\u53bf"},{"id":93,"province_id":"4","name":"\u6e1d\u5317\u533a"},{"id":94,"province_id":"4","name":"\u6e1d\u5357\u533a"},{"id":95,"province_id":"4","name":"\u6e1d\u4e2d\u533a"},{"id":96,"province_id":"4","name":"\u4e91\u9633\u53bf"},{"id":97,"province_id":"4","name":"\u5fe0\u53bf"}]},{"id":5,"name":"\u5e7f\u4e1c\u7701","cities":[{"id":98,"province_id":"5","name":"\u6f6e\u5dde\u5e02"},{"id":99,"province_id":"5","name":"\u6f84\u6d77\u5e02"},{"id":100,"province_id":"5","name":"\u4e1c\u839e\u5e02"},{"id":101,"province_id":"5","name":"\u4f5b\u5c71\u5e02"},{"id":102,"province_id":"5","name":"\u5e7f\u5dde\u5e02"},{"id":103,"province_id":"5","name":"\u6cb3\u6e90\u5e02"},{"id":104,"province_id":"5","name":"\u60e0\u5dde\u5e02"},{"id":105,"province_id":"5","name":"\u6c5f\u95e8\u5e02"},{"id":106,"province_id":"5","name":"\u63ed\u897f\u53bf"},{"id":107,"province_id":"5","name":"\u63ed\u9633\u5e02"},{"id":108,"province_id":"5","name":"\u8302\u540d\u5e02"},{"id":109,"province_id":"5","name":"\u6885\u5dde\u5e02"},{"id":110,"province_id":"5","name":"\u666e\u5b81\u5e02"},{"id":111,"province_id":"5","name":"\u6e05\u8fdc\u5e02"},{"id":112,"province_id":"5","name":"\u6c55\u5934\u5e02"},{"id":113,"province_id":"5","name":"\u6c55\u5c3e\u5e02"},{"id":114,"province_id":"5","name":"\u97f6\u5173\u5e02"},{"id":115,"province_id":"5","name":"\u6df1\u5733\u5e02"},{"id":116,"province_id":"5","name":"\u987a\u5fb7\u5e02"},{"id":117,"province_id":"5","name":"\u9633\u6c5f\u5e02"},{"id":118,"province_id":"5","name":"\u4e91\u6d6e\u5e02"},{"id":119,"province_id":"5","name":"\u6e5b\u6c5f\u5e02"},{"id":120,"province_id":"5","name":"\u8087\u5e86\u5e02"},{"id":121,"province_id":"5","name":"\u4e2d\u5c71\u5e02"},{"id":122,"province_id":"5","name":"\u73e0\u6d77\u5e02"}]},{"id":6,"name":"\u5409\u6797\u7701","cities":[{"id":123,"province_id":"6","name":"\u767d\u57ce\u5e02"},{"id":124,"province_id":"6","name":"\u767d\u5c71\u5e02"},{"id":125,"province_id":"6","name":"\u957f\u6625\u5e02"},{"id":126,"province_id":"6","name":"\u5409\u6797\u5e02"},{"id":127,"province_id":"6","name":"\u8fbd\u6e90\u5e02"},{"id":128,"province_id":"6","name":"\u56db\u5e73\u5e02"},{"id":129,"province_id":"6","name":"\u677e\u539f\u5e02"},{"id":130,"province_id":"6","name":"\u901a\u5316\u5e02"},{"id":131,"province_id":"6","name":"\u5ef6\u8fb9\u671d\u9c9c\u65cf\u81ea\u6cbb\u5dde"}]},{"id":7,"name":"\u9ed1\u9f99\u6c5f\u7701","cities":[{"id":132,"province_id":"7","name":"\u5927\u5e86\u5e02"},{"id":133,"province_id":"7","name":"\u5927\u5174\u5b89\u5cad\u5730\u533a"},{"id":134,"province_id":"7","name":"\u54c8\u5c14\u6ee8\u5e02"},{"id":135,"province_id":"7","name":"\u9e64\u5c97\u5e02"},{"id":136,"province_id":"7","name":"\u9ed1\u6cb3\u5e02"},{"id":137,"province_id":"7","name":"\u9e21\u897f\u5e02"},{"id":138,"province_id":"7","name":"\u4f73\u6728\u65af\u5e02"},{"id":139,"province_id":"7","name":"\u7261\u4e39\u6c5f\u5e02"},{"id":140,"province_id":"7","name":"\u4e03\u53f0\u6cb3\u5e02"},{"id":141,"province_id":"7","name":"\u9f50\u9f50\u54c8\u5c14\u5e02"},{"id":142,"province_id":"7","name":"\u53cc\u9e2d\u5c71\u5e02"},{"id":143,"province_id":"7","name":"\u7ee5\u5316\u5e02"},{"id":144,"province_id":"7","name":"\u4f0a\u6625\u5e02"}]},{"id":8,"name":"\u6cb3\u5317\u7701","cities":[{"id":145,"province_id":"8","name":"\u4fdd\u5b9a\u5e02"},{"id":146,"province_id":"8","name":"\u6ca7\u5dde\u5e02"},{"id":147,"province_id":"8","name":"\u627f\u5fb7\u5e02"},{"id":148,"province_id":"8","name":"\u90af\u90f8\u5e02"},{"id":149,"province_id":"8","name":"\u8861\u6c34\u5e02"},{"id":150,"province_id":"8","name":"\u5eca\u574a\u5e02"},{"id":151,"province_id":"8","name":"\u79e6\u7687\u5c9b\u5e02"},{"id":152,"province_id":"8","name":"\u77f3\u5bb6\u5e84\u5e02"},{"id":153,"province_id":"8","name":"\u5510\u5c71\u5e02"},{"id":154,"province_id":"8","name":"\u90a2\u53f0\u5e02"},{"id":155,"province_id":"8","name":"\u5f20\u5bb6\u53e3\u5e02"}]},{"id":9,"name":"\u6cb3\u5357\u7701","cities":[{"id":156,"province_id":"9","name":"\u5b89\u9633\u5e02"},{"id":157,"province_id":"9","name":"\u9e64\u58c1\u5e02"},{"id":158,"province_id":"9","name":"\u6d4e\u6e90\u5e02"},{"id":159,"province_id":"9","name":"\u7126\u4f5c\u5e02"},{"id":160,"province_id":"9","name":"\u5f00\u5c01\u5e02"},{"id":161,"province_id":"9","name":"\u6d1b\u9633\u5e02"},{"id":162,"province_id":"9","name":"\u6f2f\u6cb3\u5e02"},{"id":163,"province_id":"9","name":"\u5357\u9633\u5e02"},{"id":164,"province_id":"9","name":"\u5e73\u9876\u5c71\u5e02"},{"id":165,"province_id":"9","name":"\u6fee\u9633\u5e02"},{"id":166,"province_id":"9","name":"\u4e09\u95e8\u5ce1\u5e02"},{"id":167,"province_id":"9","name":"\u5546\u4e18\u5e02"},{"id":168,"province_id":"9","name":"\u65b0\u4e61\u5e02"},{"id":169,"province_id":"9","name":"\u4fe1\u9633\u5e02"},{"id":170,"province_id":"9","name":"\u8bb8\u660c\u5e02"},{"id":171,"province_id":"9","name":"\u90d1\u5dde\u5e02"},{"id":172,"province_id":"9","name":"\u5468\u53e3\u5e02"},{"id":173,"province_id":"9","name":"\u9a7b\u9a6c\u5e97\u5e02"}]},{"id":10,"name":"\u8fbd\u5b81\u7701","cities":[{"id":174,"province_id":"10","name":"\u978d\u5c71\u5e02"},{"id":175,"province_id":"10","name":"\u672c\u6eaa\u5e02"},{"id":176,"province_id":"10","name":"\u671d\u9633\u5e02"},{"id":177,"province_id":"10","name":"\u5927\u8fde\u5e02"},{"id":178,"province_id":"10","name":"\u4e39\u4e1c\u5e02"},{"id":179,"province_id":"10","name":"\u629a\u987a\u5e02"},{"id":180,"province_id":"10","name":"\u961c\u65b0\u5e02"},{"id":181,"province_id":"10","name":"\u846b\u82a6\u5c9b\u5e02"},{"id":182,"province_id":"10","name":"\u9526\u5dde\u5e02"},{"id":183,"province_id":"10","name":"\u8fbd\u9633\u5e02"},{"id":184,"province_id":"10","name":"\u76d8\u9526\u5e02"},{"id":185,"province_id":"10","name":"\u6c88\u9633\u5e02"},{"id":186,"province_id":"10","name":"\u94c1\u5cad\u5e02"},{"id":187,"province_id":"10","name":"\u8425\u53e3\u5e02"}]},{"id":11,"name":"\u8d35\u5dde\u7701","cities":[{"id":188,"province_id":"11","name":"\u5b89\u987a\u5e02"},{"id":189,"province_id":"11","name":"\u6bd5\u8282\u5730\u533a"},{"id":190,"province_id":"11","name":"\u6bd5\u8282\u5e02"},{"id":191,"province_id":"11","name":"\u8d35\u9633\u5e02"},{"id":192,"province_id":"11","name":"\u516d\u76d8\u6c34\u5e02"},{"id":193,"province_id":"11","name":"\u9ed4\u4e1c\u5357\u82d7\u65cf\u4f97\u65cf\u81ea\u6cbb\u5dde"},{"id":194,"province_id":"11","name":"\u9ed4\u5357\u5e03\u4f9d\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"},{"id":195,"province_id":"11","name":"\u9ed4\u897f\u5357\u5e03\u4f9d\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"},{"id":196,"province_id":"11","name":"\u94dc\u4ec1\u5730\u533a"},{"id":197,"province_id":"11","name":"\u9075\u4e49\u5e02"}]},{"id":12,"name":"\u9752\u6d77\u7701","cities":[{"id":198,"province_id":"12","name":"\u679c\u6d1b\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"id":199,"province_id":"12","name":"\u6d77\u5317\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"id":200,"province_id":"12","name":"\u6d77\u4e1c\u5730\u533a"},{"id":201,"province_id":"12","name":"\u6d77\u5357\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"id":202,"province_id":"12","name":"\u6d77\u897f\u8499\u53e4\u65cf\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"id":203,"province_id":"12","name":"\u9ec4\u5357\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"id":204,"province_id":"12","name":"\u897f\u5b81\u5e02"},{"id":205,"province_id":"12","name":"\u7389\u6811\u85cf\u65cf\u81ea\u6cbb\u5dde"}]},{"id":13,"name":"\u56db\u5ddd\u7701","cities":[{"id":206,"province_id":"13","name":"\u963f\u575d\u85cf\u65cf\u7f8c\u65cf\u81ea\u6cbb\u5dde"},{"id":207,"province_id":"13","name":"\u5df4\u4e2d\u5e02"},{"id":208,"province_id":"13","name":"\u6210\u90fd\u5e02"},{"id":209,"province_id":"13","name":"\u8fbe\u5dde\u5e02"},{"id":210,"province_id":"13","name":"\u5fb7\u9633\u5e02"},{"id":211,"province_id":"13","name":"\u7518\u5b5c\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"id":212,"province_id":"13","name":"\u5e7f\u5b89\u5e02"},{"id":213,"province_id":"13","name":"\u5e7f\u5143\u5e02"},{"id":214,"province_id":"13","name":"\u4e50\u5c71\u5e02"},{"id":215,"province_id":"13","name":"\u51c9\u5c71\u5f5d\u65cf\u81ea\u6cbb\u5dde"},{"id":216,"province_id":"13","name":"\u6cf8\u5dde\u5e02"},{"id":217,"province_id":"13","name":"\u7709\u5c71\u5e02"},{"id":218,"province_id":"13","name":"\u7ef5\u9633\u5e02"},{"id":219,"province_id":"13","name":"\u5185\u6c5f\u5e02"},{"id":220,"province_id":"13","name":"\u5357\u5145\u5e02"},{"id":221,"province_id":"13","name":"\u6500\u679d\u82b1\u5e02"},{"id":222,"province_id":"13","name":"\u9042\u5b81\u5e02"},{"id":223,"province_id":"13","name":"\u96c5\u5b89\u5e02"},{"id":224,"province_id":"13","name":"\u5b9c\u5bbe\u5e02"},{"id":225,"province_id":"13","name":"\u8d44\u9633\u5e02"},{"id":226,"province_id":"13","name":"\u81ea\u8d21\u5e02"}]},{"id":14,"name":"\u6c5f\u82cf\u7701","cities":[{"id":227,"province_id":"14","name":"\u5e38\u5dde\u5e02"},{"id":228,"province_id":"14","name":"\u4e39\u9633\u5e02"},{"id":229,"province_id":"14","name":"\u6dee\u5b89\u5e02"},{"id":230,"province_id":"14","name":"\u91d1\u575b\u5e02"},{"id":231,"province_id":"14","name":"\u8fde\u4e91\u6e2f\u5e02"},{"id":232,"province_id":"14","name":"\u5357\u4eac\u5e02"},{"id":233,"province_id":"14","name":"\u5357\u901a\u5e02"},{"id":234,"province_id":"14","name":"\u542f\u4e1c\u5e02"},{"id":235,"province_id":"14","name":"\u5982\u768b\u5e02"},{"id":236,"province_id":"14","name":"\u82cf\u5dde\u5e02"},{"id":237,"province_id":"14","name":"\u5bbf\u8fc1\u5e02"},{"id":238,"province_id":"14","name":"\u6cf0\u5dde\u5e02"},{"id":239,"province_id":"14","name":"\u65e0\u9521\u5e02"},{"id":240,"province_id":"14","name":"\u5f90\u5dde\u5e02"},{"id":241,"province_id":"14","name":"\u76d0\u57ce\u5e02"},{"id":242,"province_id":"14","name":"\u626c\u5dde\u5e02"},{"id":243,"province_id":"14","name":"\u9547\u6c5f\u5e02"}]},{"id":15,"name":"\u5c71\u4e1c\u7701","cities":[{"id":244,"province_id":"15","name":"\u6ee8\u5dde\u5e02"},{"id":245,"province_id":"15","name":"\u5fb7\u5dde\u5e02"},{"id":246,"province_id":"15","name":"\u4e1c\u8425\u5e02"},{"id":247,"province_id":"15","name":"\u83cf\u6cfd\u5e02"},{"id":248,"province_id":"15","name":"\u6d4e\u5357\u5e02"},{"id":249,"province_id":"15","name":"\u6d4e\u5b81\u5e02"},{"id":250,"province_id":"15","name":"\u83b1\u829c\u5e02"},{"id":251,"province_id":"15","name":"\u804a\u57ce\u5e02"},{"id":252,"province_id":"15","name":"\u4e34\u6c82\u5e02"},{"id":253,"province_id":"15","name":"\u9752\u5c9b\u5e02"},{"id":254,"province_id":"15","name":"\u65e5\u7167\u5e02"},{"id":255,"province_id":"15","name":"\u6cf0\u5b89\u5e02"},{"id":256,"province_id":"15","name":"\u5a01\u6d77\u5e02"},{"id":257,"province_id":"15","name":"\u6f4d\u574a\u5e02"},{"id":258,"province_id":"15","name":"\u70df\u53f0\u5e02"},{"id":259,"province_id":"15","name":"\u67a3\u5e84\u5e02"},{"id":260,"province_id":"15","name":"\u6dc4\u535a\u5e02"}]},{"id":16,"name":"\u4e91\u5357\u7701","cities":[{"id":261,"province_id":"16","name":"\u4fdd\u5c71\u5e02"},{"id":262,"province_id":"16","name":"\u695a\u96c4\u5f5d\u65cf\u81ea\u6cbb\u5dde"},{"id":263,"province_id":"16","name":"\u5927\u7406\u767d\u65cf\u81ea\u6cbb\u5dde"},{"id":264,"province_id":"16","name":"\u5fb7\u5b8f\u50a3\u65cf\u666f\u9887\u65cf\u81ea\u6cbb\u5dde"},{"id":265,"province_id":"16","name":"\u8fea\u5e86\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"id":266,"province_id":"16","name":"\u7ea2\u6cb3\u54c8\u5c3c\u65cf\u5f5d\u65cf\u81ea\u6cbb\u5dde"},{"id":267,"province_id":"16","name":"\u6606\u660e\u5e02"},{"id":268,"province_id":"16","name":"\u4e3d\u6c5f\u5e02"},{"id":269,"province_id":"16","name":"\u4e34\u6ca7\u5e02"},{"id":270,"province_id":"16","name":"\u6012\u6c5f\u5088\u50f3\u65cf\u81ea\u6cbb\u5dde"},{"id":271,"province_id":"16","name":"\u666e\u6d31\u5e02"},{"id":272,"province_id":"16","name":"\u66f2\u9756\u5e02"},{"id":273,"province_id":"16","name":"\u6587\u5c71\u58ee\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"},{"id":274,"province_id":"16","name":"\u897f\u53cc\u7248\u7eb3\u50a3\u65cf\u81ea\u6cbb\u5dde"},{"id":275,"province_id":"16","name":"\u7389\u6eaa\u5e02"},{"id":276,"province_id":"16","name":"\u662d\u901a\u5e02"}]},{"id":17,"name":"\u5c71\u897f\u7701","cities":[{"id":277,"province_id":"17","name":"\u957f\u6cbb"},{"id":278,"province_id":"17","name":"\u5927\u540c"},{"id":279,"province_id":"17","name":"\u664b\u57ce"},{"id":280,"province_id":"17","name":"\u664b\u4e2d"},{"id":281,"province_id":"17","name":"\u4e34\u6c7e"},{"id":282,"province_id":"17","name":"\u5415\u6881"},{"id":283,"province_id":"17","name":"\u6714\u5dde"},{"id":284,"province_id":"17","name":"\u592a\u539f"},{"id":285,"province_id":"17","name":"\u5ffb\u5dde"},{"id":286,"province_id":"17","name":"\u9633\u6cc9"},{"id":287,"province_id":"17","name":"\u8fd0\u57ce"}]},{"id":18,"name":"\u5b89\u5fbd\u7701","cities":[{"id":288,"province_id":"18","name":"\u5b89\u5e86\u5e02"},{"id":289,"province_id":"18","name":"\u868c\u57e0\u5e02"},{"id":290,"province_id":"18","name":"\u4eb3\u5dde\u5e02"},{"id":291,"province_id":"18","name":"\u5de2\u6e56\u5e02"},{"id":292,"province_id":"18","name":"\u6c60\u5dde\u5e02"},{"id":293,"province_id":"18","name":"\u6ec1\u5dde\u5e02"},{"id":294,"province_id":"18","name":"\u961c\u9633\u5e02"},{"id":295,"province_id":"18","name":"\u5408\u80a5\u5e02"},{"id":296,"province_id":"18","name":"\u6dee\u5317\u5e02"},{"id":297,"province_id":"18","name":"\u6dee\u5357\u5e02"},{"id":298,"province_id":"18","name":"\u9ec4\u5c71\u5e02"},{"id":299,"province_id":"18","name":"\u516d\u5b89\u5e02"},{"id":300,"province_id":"18","name":"\u9a6c\u978d\u5c71\u5e02"},{"id":301,"province_id":"18","name":"\u5bbf\u5dde\u5e02"},{"id":302,"province_id":"18","name":"\u94dc\u9675\u5e02"},{"id":303,"province_id":"18","name":"\u829c\u6e56\u5e02"},{"id":304,"province_id":"18","name":"\u5ba3\u57ce\u5e02"}]},{"id":19,"name":"\u6d59\u6c5f\u7701","cities":[{"id":305,"province_id":"19","name":"\u676d\u5dde\u5e02"},{"id":306,"province_id":"19","name":"\u6e56\u5dde\u5e02"},{"id":307,"province_id":"19","name":"\u5609\u5174\u5e02"},{"id":308,"province_id":"19","name":"\u91d1\u534e\u5e02"},{"id":309,"province_id":"19","name":"\u4e3d\u6c34\u5e02"},{"id":310,"province_id":"19","name":"\u5b81\u6ce2\u5e02"},{"id":311,"province_id":"19","name":"\u8862\u5dde\u5e02"},{"id":312,"province_id":"19","name":"\u7ecd\u5174\u5e02"},{"id":313,"province_id":"19","name":"\u53f0\u5dde\u5e02"},{"id":314,"province_id":"19","name":"\u6e29\u5dde\u5e02"},{"id":315,"province_id":"19","name":"\u821f\u5c71\u5e02"}]},{"id":20,"name":"\u798f\u5efa\u7701","cities":[{"id":316,"province_id":"20","name":"\u798f\u5dde\u5e02"},{"id":317,"province_id":"20","name":"\u9f99\u5ca9\u5e02"},{"id":318,"province_id":"20","name":"\u5357\u5e73\u5e02"},{"id":319,"province_id":"20","name":"\u5b81\u5fb7\u5e02"},{"id":320,"province_id":"20","name":"\u8386\u7530\u5e02"},{"id":321,"province_id":"20","name":"\u6cc9\u5dde\u5e02"},{"id":322,"province_id":"20","name":"\u4e09\u660e\u5e02"},{"id":323,"province_id":"20","name":"\u53a6\u95e8\u5e02"},{"id":324,"province_id":"20","name":"\u6f33\u5dde\u5e02"}]},{"id":21,"name":"\u6e56\u5317\u7701","cities":[{"id":325,"province_id":"21","name":"\u9102\u5dde\u5e02"},{"id":326,"province_id":"21","name":"\u6069\u65bd\u571f\u5bb6\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"},{"id":327,"province_id":"21","name":"\u9ec4\u5188\u5e02"},{"id":328,"province_id":"21","name":"\u9ec4\u77f3\u5e02"},{"id":329,"province_id":"21","name":"\u8346\u95e8\u5e02"},{"id":330,"province_id":"21","name":"\u8346\u5dde\u5e02"},{"id":331,"province_id":"21","name":"\u6f5c\u6c5f\u5e02"},{"id":332,"province_id":"21","name":"\u795e\u519c\u67b6\u6797\u533a"},{"id":333,"province_id":"21","name":"\u5341\u5830\u5e02"},{"id":334,"province_id":"21","name":"\u968f\u5dde\u5e02"},{"id":335,"province_id":"21","name":"\u5929\u95e8\u5e02"},{"id":336,"province_id":"21","name":"\u6b66\u6c49\u5e02"},{"id":337,"province_id":"21","name":"\u4ed9\u6843\u5e02"},{"id":338,"province_id":"21","name":"\u54b8\u5b81\u5e02"},{"id":339,"province_id":"21","name":"\u8944\u6a0a\u5e02"},{"id":340,"province_id":"21","name":"\u8944\u9633\u5e02"},{"id":341,"province_id":"21","name":"\u5b5d\u611f\u5e02"},{"id":342,"province_id":"21","name":"\u5b9c\u660c\u5e02"}]},{"id":22,"name":"\u6e56\u5357\u7701","cities":[{"id":343,"province_id":"22","name":"\u957f\u6c99\u5e02"},{"id":344,"province_id":"22","name":"\u5e38\u5fb7\u5e02"},{"id":345,"province_id":"22","name":"\u90f4\u5dde\u5e02"},{"id":346,"province_id":"22","name":"\u8861\u9633\u5e02"},{"id":347,"province_id":"22","name":"\u6000\u5316\u5e02"},{"id":348,"province_id":"22","name":"\u5a04\u5e95\u5e02"},{"id":349,"province_id":"22","name":"\u90b5\u9633\u5e02"},{"id":350,"province_id":"22","name":"\u6e58\u6f6d\u5e02"},{"id":351,"province_id":"22","name":"\u6e58\u897f\u571f\u5bb6\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"},{"id":352,"province_id":"22","name":"\u76ca\u9633\u5e02"},{"id":353,"province_id":"22","name":"\u6c38\u5dde\u5e02"},{"id":354,"province_id":"22","name":"\u5cb3\u9633\u5e02"},{"id":355,"province_id":"22","name":"\u5f20\u5bb6\u754c\u5e02"},{"id":356,"province_id":"22","name":"\u682a\u6d32\u5e02"}]},{"id":23,"name":"\u6c5f\u897f\u7701","cities":[{"id":357,"province_id":"23","name":"\u629a\u5dde\u5e02"},{"id":358,"province_id":"23","name":"\u8d63\u5dde\u5e02"},{"id":359,"province_id":"23","name":"\u5409\u5b89\u5e02"},{"id":360,"province_id":"23","name":"\u666f\u5fb7\u9547\u5e02"},{"id":361,"province_id":"23","name":"\u4e5d\u6c5f\u5e02"},{"id":362,"province_id":"23","name":"\u5357\u660c\u5e02"},{"id":363,"province_id":"23","name":"\u840d\u4e61\u5e02"},{"id":364,"province_id":"23","name":"\u4e0a\u9976\u5e02"},{"id":365,"province_id":"23","name":"\u65b0\u4f59\u5e02"},{"id":366,"province_id":"23","name":"\u5b9c\u6625\u5e02"},{"id":367,"province_id":"23","name":"\u9e70\u6f6d\u5e02"}]},{"id":24,"name":"\u6d77\u5357\u7701","cities":[{"id":368,"province_id":"24","name":"\u767d\u6c99\u9ece\u65cf\u81ea\u6cbb\u53bf"},{"id":369,"province_id":"24","name":"\u4fdd\u4ead\u9ece\u65cf\u82d7\u65cf\u81ea\u6cbb\u53bf"},{"id":370,"province_id":"24","name":"\u660c\u6c5f\u9ece\u65cf\u81ea\u6cbb\u53bf"},{"id":371,"province_id":"24","name":"\u6f84\u8fc8\u53bf"},{"id":372,"province_id":"24","name":"\u510b\u5dde\u5e02"},{"id":373,"province_id":"24","name":"\u5b9a\u5b89\u53bf"},{"id":374,"province_id":"24","name":"\u4e1c\u65b9\u5e02"},{"id":375,"province_id":"24","name":"\u6d77\u53e3\u5e02"},{"id":376,"province_id":"24","name":"\u4e50\u4e1c\u9ece\u65cf\u81ea\u6cbb\u53bf"},{"id":377,"province_id":"24","name":"\u4e34\u9ad8\u53bf"},{"id":378,"province_id":"24","name":"\u9675\u6c34\u9ece\u65cf\u81ea\u6cbb\u53bf"},{"id":379,"province_id":"24","name":"\u743c\u6d77\u5e02"},{"id":380,"province_id":"24","name":"\u743c\u4e2d\u9ece\u65cf\u82d7\u65cf\u81ea\u6cbb\u53bf"},{"id":381,"province_id":"24","name":"\u4e09\u4e9a\u5e02"},{"id":382,"province_id":"24","name":"\u5c6f\u660c\u53bf"},{"id":383,"province_id":"24","name":"\u4e07\u5b81\u5e02"},{"id":384,"province_id":"24","name":"\u6587\u660c\u5e02"},{"id":385,"province_id":"24","name":"\u4e94\u6307\u5c71\u5e02"}]},{"id":25,"name":"\u9655\u897f\u7701","cities":[{"id":386,"province_id":"25","name":"\u5b89\u5eb7\u5e02"},{"id":387,"province_id":"25","name":"\u5b9d\u9e21\u5e02"},{"id":388,"province_id":"25","name":"\u6c49\u4e2d\u5e02"},{"id":389,"province_id":"25","name":"\u5546\u6d1b\u5e02"},{"id":390,"province_id":"25","name":"\u94dc\u5ddd\u5e02"},{"id":391,"province_id":"25","name":"\u6e2d\u5357\u5e02"},{"id":392,"province_id":"25","name":"\u897f\u5b89\u5e02"},{"id":393,"province_id":"25","name":"\u54b8\u9633\u5e02"},{"id":394,"province_id":"25","name":"\u5ef6\u5b89\u5e02"},{"id":395,"province_id":"25","name":"\u6986\u6797\u5e02"}]},{"id":26,"name":"\u7518\u8083\u7701","cities":[{"id":396,"province_id":"26","name":"\u767d\u94f6\u5e02"},{"id":397,"province_id":"26","name":"\u5b9a\u897f\u5e02"},{"id":398,"province_id":"26","name":"\u7518\u5357\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"id":399,"province_id":"26","name":"\u5609\u5cea\u5173\u5e02"},{"id":400,"province_id":"26","name":"\u91d1\u660c\u5e02"},{"id":401,"province_id":"26","name":"\u9152\u6cc9\u5e02"},{"id":402,"province_id":"26","name":"\u5170\u5dde\u5e02"},{"id":403,"province_id":"26","name":"\u4e34\u590f\u56de\u65cf\u81ea\u6cbb\u5dde"},{"id":404,"province_id":"26","name":"\u9647\u5357\u5e02"},{"id":405,"province_id":"26","name":"\u5e73\u51c9\u5e02"},{"id":406,"province_id":"26","name":"\u5e86\u9633\u5e02"},{"id":407,"province_id":"26","name":"\u5929\u6c34\u5e02"},{"id":408,"province_id":"26","name":"\u6b66\u5a01\u5e02"},{"id":409,"province_id":"26","name":"\u5f20\u6396\u5e02"}]},{"id":27,"name":"\u5e7f\u897f\u58ee\u65cf\u81ea\u6cbb\u533a","cities":[{"id":410,"province_id":"27","name":"\u767e\u8272\u5e02"},{"id":411,"province_id":"27","name":"\u5317\u6d77\u5e02"},{"id":412,"province_id":"27","name":"\u5d07\u5de6\u5e02"},{"id":413,"province_id":"27","name":"\u9632\u57ce\u6e2f\u5e02"},{"id":414,"province_id":"27","name":"\u8d35\u6e2f\u5e02"},{"id":415,"province_id":"27","name":"\u6842\u6797\u5e02"},{"id":416,"province_id":"27","name":"\u6cb3\u6c60\u5e02"},{"id":417,"province_id":"27","name":"\u8d3a\u5dde\u5e02"},{"id":418,"province_id":"27","name":"\u6765\u5bbe\u5e02"},{"id":419,"province_id":"27","name":"\u67f3\u5dde\u5e02"},{"id":420,"province_id":"27","name":"\u5357\u5b81\u5e02"},{"id":421,"province_id":"27","name":"\u94a6\u5dde\u5e02"},{"id":422,"province_id":"27","name":"\u68a7\u5dde\u5e02"},{"id":423,"province_id":"27","name":"\u7389\u6797\u5e02"}]},{"id":28,"name":"\u5185\u8499\u53e4\u81ea\u6cbb\u533a","cities":[{"id":424,"province_id":"28","name":"\u963f\u62c9\u5584\u76df"},{"id":425,"province_id":"28","name":"\u5df4\u5f66\u6dd6\u5c14\u5e02"},{"id":426,"province_id":"28","name":"\u5305\u5934\u5e02"},{"id":427,"province_id":"28","name":"\u8d64\u5cf0\u5e02"},{"id":428,"province_id":"28","name":"\u9102\u5c14\u591a\u65af\u5e02"},{"id":429,"province_id":"28","name":"\u547c\u548c\u6d69\u7279\u5e02"},{"id":430,"province_id":"28","name":"\u547c\u4f26\u8d1d\u5c14\u5e02"},{"id":431,"province_id":"28","name":"\u901a\u8fbd\u5e02"},{"id":432,"province_id":"28","name":"\u4e4c\u6d77\u5e02"},{"id":433,"province_id":"28","name":"\u4e4c\u5170\u5bdf\u5e03\u5e02"},{"id":434,"province_id":"28","name":"\u9521\u6797\u90ed\u52d2\u76df"},{"id":435,"province_id":"28","name":"\u5174\u5b89\u76df"}]},{"id":29,"name":"\u5b81\u590f\u56de\u65cf\u81ea\u6cbb\u533a","cities":[{"id":436,"province_id":"29","name":"\u56fa\u539f\u5e02"},{"id":437,"province_id":"29","name":"\u77f3\u5634\u5c71\u5e02"},{"id":438,"province_id":"29","name":"\u5434\u5fe0\u5e02"},{"id":439,"province_id":"29","name":"\u94f6\u5ddd\u5e02"},{"id":440,"province_id":"29","name":"\u4e2d\u536b\u5e02"}]},{"id":30,"name":"\u65b0\u7586\u7ef4\u543e\u5c14\u81ea\u6cbb\u533a","cities":[{"id":441,"province_id":"30","name":"\u963f\u514b\u82cf\u5730\u533a"},{"id":442,"province_id":"30","name":"\u963f\u62c9\u5c14\u5e02"},{"id":443,"province_id":"30","name":"\u963f\u52d2\u6cf0\u5730\u533a"},{"id":444,"province_id":"30","name":"\u963f\u56fe\u4ec0\u5e02"},{"id":445,"province_id":"30","name":"\u5df4\u97f3\u90ed\u695e\u8499\u53e4\u81ea\u6cbb\u5dde"},{"id":446,"province_id":"30","name":"\u535a\u5c14\u5854\u62c9\u8499\u53e4\u81ea\u6cbb\u5dde"},{"id":447,"province_id":"30","name":"\u660c\u5409\u56de\u65cf\u81ea\u6cbb\u5dde"},{"id":448,"province_id":"30","name":"\u54c8\u5bc6\u5730\u533a"},{"id":449,"province_id":"30","name":"\u548c\u7530\u5730\u533a"},{"id":450,"province_id":"30","name":"\u5580\u4ec0\u5730\u533a"},{"id":451,"province_id":"30","name":"\u514b\u62c9\u739b\u4f9d\u5e02"},{"id":452,"province_id":"30","name":"\u514b\u5b5c\u52d2\u82cf\u67ef\u5c14\u514b\u5b5c\u81ea\u6cbb\u5dde"},{"id":453,"province_id":"30","name":"\u77f3\u6cb3\u5b50\u5e02"},{"id":454,"province_id":"30","name":"\u5854\u57ce\u5730\u533a"},{"id":455,"province_id":"30","name":"\u56fe\u6728\u8212\u514b\u5e02"},{"id":456,"province_id":"30","name":"\u5410\u9c81\u756a\u5730\u533a"},{"id":457,"province_id":"30","name":"\u4e4c\u9c81\u6728\u9f50\u5e02"},{"id":458,"province_id":"30","name":"\u4e94\u5bb6\u6e20\u5e02"},{"id":459,"province_id":"30","name":"\u4f0a\u7281\u54c8\u8428\u514b\u81ea\u6cbb\u5dde"}]},{"id":31,"name":"\u897f\u85cf\u81ea\u6cbb\u533a","cities":[{"id":460,"province_id":"31","name":"\u963f\u91cc\u5730\u533a"},{"id":461,"province_id":"31","name":"\u660c\u90fd\u5730\u533a"},{"id":462,"province_id":"31","name":"\u62c9\u8428\u5e02"},{"id":463,"province_id":"31","name":"\u6797\u829d\u5730\u533a"},{"id":464,"province_id":"31","name":"\u90a3\u66f2\u5730\u533a"},{"id":465,"province_id":"31","name":"\u65e5\u5580\u5219\u5730\u533a"},{"id":466,"province_id":"31","name":"\u5c71\u5357\u5730\u533a"}]},{"id":32,"name":"\u9999\u6e2f\u7279\u533a","cities":[{"id":467,"province_id":"32","name":"\u5317\u533a"},{"id":468,"province_id":"32","name":"\u5927\u57d4\u533a"},{"id":469,"province_id":"32","name":"\u4e1c\u533a"},{"id":470,"province_id":"32","name":"\u89c2\u5858\u533a"},{"id":471,"province_id":"32","name":"\u9ec4\u5927\u4ed9\u533a"},{"id":472,"province_id":"32","name":"\u4e5d\u9f99\u57ce\u533a"},{"id":473,"province_id":"32","name":"\u8475\u9752\u533a"},{"id":474,"province_id":"32","name":"\u79bb\u5c9b\u533a"},{"id":475,"province_id":"32","name":"\u5357\u533a"},{"id":476,"province_id":"32","name":"\u8343\u6e7e\u533a"},{"id":477,"province_id":"32","name":"\u6c99\u7530\u533a"},{"id":478,"province_id":"32","name":"\u6df1\u6c34\u57d7\u533a"},{"id":479,"province_id":"32","name":"\u5c6f\u95e8\u533a"},{"id":480,"province_id":"32","name":"\u6e7e\u4ed4\u533a"},{"id":481,"province_id":"32","name":"\u897f\u8d21\u533a"},{"id":482,"province_id":"32","name":"\u6cb9\u5c16\u65fa\u533a"},{"id":483,"province_id":"32","name":"\u5143\u6717\u533a"},{"id":484,"province_id":"32","name":"\u4e2d\u897f\u533a"}]},{"id":33,"name":"\u6fb3\u95e8\u7279\u533a","cities":[{"id":485,"province_id":"33","name":"\u6fb3\u95e8"}]}]';
        $provinces = json_decode($provinces, true);

        foreach ($provinces as $province) {
            $cities = $province['cities'];
            unset($province['cities']);
            $province = \App\Model\Province::create($province);
            foreach ($cities as $city) {
                $city = new \App\Model\City($city);
                $city = $province->cities()->save($city);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}