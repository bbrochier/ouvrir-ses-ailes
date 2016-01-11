<div class="row">
    <div class="col-md-12">
        <ul class="main-nav">
            <li>
                <a href="index.php" class="icon icon-papillon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="4.3 19.784 77.4 46.434" enable-background="new 4.3 19.784 77.4 46.434"><path d="M44.505 38.565c-0.077-0.143-0.156-0.277-0.239-0.396 0.062-0.087 0.116-0.181 0.159-0.28 0.021 0.001 0.039 0.012 0.061 0.012 0.344 0 0.618-0.278 0.618-0.619 0-0.343-0.273-0.621-0.618-0.621 -0.021 0-0.04 0.01-0.062 0.013 -0.09-0.213-0.232-0.397-0.402-0.548 1.314-3.594 4.114-9.76 6.892-10.436 0.134 0.15 0.325 0.25 0.545 0.25 0.406 0 0.736-0.331 0.736-0.737 0-0.408-0.331-0.737-0.736-0.737 -0.278 0-0.512 0.16-0.636 0.386 -3.458 0.743-6.426 7.833-7.559 10.908 -0.086-0.015-0.171-0.027-0.261-0.027 -0.09 0-0.177 0.012-0.263 0.027 -1.135-3.075-4.103-10.166-7.561-10.908 -0.125-0.227-0.358-0.386-0.636-0.386 -0.406 0-0.736 0.329-0.736 0.737 0 0.407 0.331 0.737 0.736 0.737 0.219 0 0.411-0.1 0.545-0.251 2.774 0.674 5.576 6.844 6.892 10.439 -0.17 0.15-0.311 0.334-0.402 0.547 -0.021-0.002-0.041-0.013-0.062-0.013 -0.34 0-0.619 0.277-0.619 0.621 0 0.341 0.278 0.619 0.619 0.619 0.021 0 0.041-0.011 0.061-0.012 0.043 0.1 0.097 0.193 0.159 0.28 -0.083 0.121-0.163 0.254-0.24 0.397C21.966 19.871 9.629 17.271 5.589 21.588c-4.071 4.352 2.598 8.143 4.842 13.477 2.248 5.335 3.159 9.544 6.668 8.985 1.73 0-8.142 5.334 1.756 16.915 8.867 10.377 15.09 2.176 15.09 2.176l7.58-12.503v8.528c0 0.685 0.661 1.236 1.474 1.236 0.814 0 1.474-0.553 1.474-1.236v-8.523l7.58 12.498c0 0 6.223 8.201 15.092-2.176 9.895-11.581 0.021-16.915 1.752-16.915 3.511 0.56 4.422-3.649 6.669-8.985 2.246-5.334 8.914-9.125 4.843-13.477C76.371 17.271 64.033 19.871 44.505 38.565z"/></svg>
                </a>
            </li>
            <li <?php if ($page == 'nutrition') echo 'class="active"';?>>
                <a href="nutrition.php">Nutrition consciente</a>
            </li>
            <li <?php if ($page == 'elixirs') echo 'class="active"';?>>
                <a href="elixirs.php">Elixirs floraux</a>
            </li>
            <li <?php if ($page == 'energie') echo 'class="active"';?>>
                <a href="energie.php">Équilibre énergetique</a>
            </li>
            <li <?php if ($page == 'consultations' || $page == 'conferences' || $page == 'ateliers' || $page == 'stages') echo 'class="active"';?>>
                <span>Activités</span>
                <ul>
                    <li <?php if ($page == 'consultations') echo 'class="active"';?>>
                        <a href="consultations.php">Consultations</a>
                    </li>
                    <li <?php if ($page == 'conferences') echo 'class="active"';?>>
                        <a href="conferences.php">Conférences</a>
                    </li>
                    <li <?php if ($page == 'ateliers') echo 'class="active"';?>>
                        <a href="ateliers.php">Ateliers</a>
                    </li>
                    <li <?php if ($page == 'stages') echo 'class="active"';?>>
                        <a href="stages.php">Stages</a>
                    </li>
                </ul>
            </li>
            <li <?php if ($page == 'contact') echo 'class="active"';?>>
                <a href="contact.php">Contact</a>
            </li>
            <li <?php if ($page == 'liens') echo 'class="active"';?>>
                <a href="liens.php">Liens</a>
            </li>
        </ul>
    </div>
</div>
