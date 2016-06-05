<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-26 18:21:06
         compiled from "/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/developer/api_achievement.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91394498957471462118120-53670642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '946b9b99f88b4e3910c8a1d46d2264e53a7c927a' => 
    array (
      0 => '/var/www/u0198439/data/www/pt-wow.ru/Templates/FreedomCore/developer/api_achievement.tpl',
      1 => 1445375468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91394498957471462118120-53670642',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57471462132ae7_45810146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57471462132ae7_45810146')) {function content_57471462132ae7_45810146($_smarty_tpl) {?><li class="endpoint">
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
