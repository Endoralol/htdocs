{include file='account/account_header.tpl'}
<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div  id="page-header">
                <h2 class="subcategory">{#Account_Management_Operations#}</h2>
                <h3 class="headline">{#Account_Management_Orders_History#}</h3>
            </div>
            <div id="page-content" class="page-content">
                <div  id="order-history">
                    <div class="data-container type-table">
                        <table style="font-size:12px;">
                            <thead>
                            <tr class="">
                                <th align="left" width="9%">{#Account_Management_Payment_Order#}</th>
                                <th align="left" width="8%">{#Date#}</th>
                                <th align="center" width="42%">{#Account_Management_Payment_ItDesc#}</th>
                                <th align="center" width="14%">{#Account_Management_Payment_Price#}</th>
                                <th algin="center" width="5%">{#Account_Management_Payment_Amount#}</th>
                                <th align="center" width="9%">{#Status#}</th>
                                <th align="center" width="13%">{#Account_Management_Payment_Total#}</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <script>
                                $(function() {
                                    $('[data-click]').on('mousedown', 'td', function(e) {
                                        $(this).data('clickstart', e.timeStamp);
                                    });
                                    $('[data-click]').on('mouseup', 'td', function(e) {
                                        if(e.which != 1 || e.metaKey || e.ctrlKey || e.altKey) {
                                            return false;
                                        }
                                        if(e.timeStamp - $(this).data('clickstart') > 500) {
                                            return false;
                                        }
                                        document.location.href = $(this).closest('[data-click]').data('click');
                                    });
                                });
                            </script>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{include file='account/account_footer.tpl'}