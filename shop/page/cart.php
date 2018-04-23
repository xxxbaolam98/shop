

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-10 col-md-offset-1">
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                   

                    <tr>
                       

                   

                    	<td class="col-sm-8 col-md-6">
                       
                            <img class="img-thumbnail" src="<?= $values['product_name']; ?>" style="width: 72px; height: 72px;">
                           
                                <h4><a href="#">name</a></h4>
                                                     
                        </td>
                        <td class="col-md-1 col-md-1 text-center"><strong>quantity</strong></td>
                       
                        <td class="col-md-1 col-md-1 text-center"><strong>$</strong></td>
                        <td class="col-md-1 col-md-1 text-center" name="total"><strong></strong></td>
                        <td class="col-md-1 col-md-1">
                        <button type="button" class="btn btn-danger" href="">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                  
                    </tr>
                     
                   
                   
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td name="total_bill"><h3>Total</h3></td>
                        <td class="text-right"><h3><strong></strong></h3></td>
                    </tr>
                   
                       
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                             Continue Shopping
                        </button></td>
                        <td>
                       <a href="index.php?page=checkout" class="btn btn-success" name="checkout">Check out</a> </td>
                    </tr>
                
                </tbody>
            </table>
        </div>
    </div>
</div>