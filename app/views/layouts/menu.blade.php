<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fakturace <span
            class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">

        <li>
            {{ link_to_action('FinanceInvoiceController@index', 'Faktury' ) }}
        </li>


        <li>
            {{ link_to_action('FinanceCompanyController@index', 'Společnosti' ) }}
        </li>


        <li>
            {{ link_to_action('FinanceAccountController@index', 'Učty' ) }}
        </li>


    </ul>

</li>


<li>
    {{ link_to_action('AdminUserController@index', 'Přístupy' ) }}
</li>




