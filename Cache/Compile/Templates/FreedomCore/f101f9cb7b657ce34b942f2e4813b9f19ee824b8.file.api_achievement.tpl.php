<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-04 07:44:44
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/developer/api_achievement.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193750178357525cbcb3d669-07605541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f101f9cb7b657ce34b942f2e4813b9f19ee824b8' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/developer/api_achievement.tpl',
      1 => 1464860660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193750178357525cbcb3d669-07605541',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57525cbcb55272_77275224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57525cbcb55272_77275224')) {function content_57525cbcb55272_77275224($_smarty_tpl) {?><li class="endpoint">
    <h3 class="header-3 title-api-key">
        Achievement API
    </h3>
    <div id="achievement_accordion" class="endpoint_accordion">
        <h3>
            <span class="method_type">GET</span>
            <span class="endpoint_name">ACHIEVEMENT</span>
            <span class="method_uri">/API/ACHIEVEMENT/SIMPLE/:ID</span>
        </h3>
        <ul>
            <li class="method get">
                <form id="achievement_simple_submission_form" class="method_form" style="overflow: hidden; display: block;">
                    <input name="dataName" id="dataName" type="hidden" value="achievement">
                    <input name="methodName" id="methodName" type="hidden" value="achievement">
                    <input name="httpMethod" id="httpMethod" type="hidden" value="GET">
                    <input name="methodUri" id="methodUri" type="hidden" value="/api/achievement/simple/:id">
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
                                <input type="text" name="params[:id]" id="id" value="2144" class="input" placeholder="required" required>
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

                    <div class="request_result" id="achievement_response">

                    </div>
                </form>

            </li>
        </ul>
    </div>
</li><?php }} ?>
