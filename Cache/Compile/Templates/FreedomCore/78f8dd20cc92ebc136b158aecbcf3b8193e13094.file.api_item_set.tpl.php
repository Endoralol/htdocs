<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 07:44:44
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/developer/api_item_set.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206847079957525cbcb8c893-11838756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78f8dd20cc92ebc136b158aecbcf3b8193e13094' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/developer/api_item_set.tpl',
      1 => 1464860660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206847079957525cbcb8c893-11838756',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57525cbcba1de2_97646191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57525cbcba1de2_97646191')) {function content_57525cbcba1de2_97646191($_smarty_tpl) {?><div id="item_accordion" class="endpoint_accordion">
    <h3>
        <span class="method_type">GET</span>
        <span class="endpoint_name">ITEM</span>
        <span class="method_uri">/API/ITEM/SET/:ID</span>
    </h3>
    <ul>
        <li class="method get">
            <form id="itemset_submission_form" class="method_form" style="overflow: hidden; display: block;">
                <input name="dataName" id="dataName" type="hidden" value="itemset">
                <input name="methodName" id="methodName" type="hidden" value="item">
                <input name="httpMethod" id="httpMethod" type="hidden" value="GET">
                <input name="methodUri" id="methodUri" type="hidden" value="/api/item/set/:id">
                <table class="method_table_parameters" style="margin: 10px;">
                    <thead style="text-align: left;">
                    <tr>
                        <th><?php echo $_smarty_tpl->getConfigVariable('Developer_Form_Parameter');?>
</th>
                        <th><?php echo $_smarty_tpl->getConfigVariable('Developer_Form_Value');?>
</th>
                        <th><?php echo $_smarty_tpl->getConfigVariable('Developer_Form_Description');?>
</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="type-pathReplace required ">
                        <td class="name">
                            :id
                        </td>
                        <td class="parameter">
                            <input type="text" name="params[:id]" id="id" value="901" class="input" placeholder="required" required>
                        </td>
                        <td class="description">
                            <p></p>
                        </td>
                    </tr>
                    <tr class="type-query  ">
                        <td class="name">
                            locale
                        </td>
                        <td class="parameter">
                            <select id="locale" class="input" name="params[locale]" placeholder="">
                                <option value="en_US" selected="selected">
                                    en_US
                                </option>
                                <option value="pt_BR">
                                    pt_BR
                                </option>
                                <option value="es_MX">
                                    es_MX
                                </option>
                                <option value="ru_RU">
                                    ru_RU
                                </option>
                            </select>
                        </td>
                        <td class="description">
                            <p><?php echo $_smarty_tpl->getConfigVariable('Developer_Data_Locale');?>
</p>
                        </td>
                    </tr>
                    <tr class="type-query  ">
                        <td class="name">
                            jsonp
                        </td>
                        <td class="parameter">
                            <input type="text" class="input" id="jsonp" name="params[jsonp]" value="" placeholder="">
                        </td>
                        <td class="description">
                            <p><?php echo $_smarty_tpl->getConfigVariable('Developer_Data_JSONP');?>
</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button class="get-results" style="margin: 10px;" type="submit" onclick="return PerformJsonRequest($(this).parent('form'));"><?php echo $_smarty_tpl->getConfigVariable('Developer_Form_TryIt');?>
</button>
                <button class="clear-results" style="margin: 10px; display: none;" type="submit"><?php echo $_smarty_tpl->getConfigVariable('Developer_Form_Reset');?>
</button>

                <div class="request_result" id="itemset_response">

                </div>
            </form>

        </li>
    </ul>
</div><?php }} ?>
