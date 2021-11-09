<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Sidebar
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/home') }}">
                        Dashboard
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
               <li role="presentation">
                   <a href="{{ url('/admin/user') }}">
                       จัดการข้อมูลพนักงาน
                   </a>
               </li>
           </ul>
           <ul class="nav" role="tablist">
               <li role="presentation">
                   <a href="{{ url('/admin/product') }}">
                       จัดการข้อมูลสินค้า
                   </a>
               </li>
           </ul>

           <ul class="nav" role="tablist">
               <li role="presentation">
                   <a href="{{ url('/admin/order') }}">
                       จัดการข้อมูลการซื้อสินค้า
                   </a>
               </li>
           </ul>
           </ul>
           <ul class="nav" role="tablist">
               <li role="presentation">
                   <a href="{{ url('/admin/orderdetail') }}">
                       จัดการข้อมูลรายละเอียดการซื่อสินค้า
                   </a>
               </li>
           </ul>
           <ul class="nav" role="tablist">
               <li role="presentation">
                   <a href="{{ url('/admin/payment') }}">
                       จัดการการชำระเงิน
                   </a>
               </li>
           </ul>
         
           <ul class="nav" role="tablist">
               <li role="presentation">
                   <a href="{{ url('/admin/basket') }}">
                       จัดการการเลือกสินค้า
                   </a>
               </li>
           </ul>
        </div>
    </div>
</div>
