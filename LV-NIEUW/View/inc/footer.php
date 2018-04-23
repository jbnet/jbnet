<?php
/**
 * @author           Pierre-Henry Soria <phy@hizup.uk>
 * @copyright        (c) 2015-2017, Pierre-Henry Soria. All Rights Reserved.
 * @license          Lesser General Public License <http://www.gnu.org/copyleft/lesser.html>
 * @link             http://hizup.uk
 */
?>
            <footer>
                <p class="italic"><strong><a href="<?=ROOT_URL?>" title="Homeage">Duiven klokken</a></strong>&nbsp; | &nbsp;
                <?php if (!empty($_SESSION['is_logged'])): ?>
                    You are connected as Admin - <a href="<?=ROOT_URL?>?p=admin&amp;a=logout">Uitloggen</a> &nbsp; | &nbsp;
                    <a href="<?=ROOT_URL?>?p=blog&amp;a=all">Bekijk al het nieuws</a>
                <?php else: ?>
                    <a href="<?=ROOT_URL?>?p=admin&amp;a=login">Admin login</a>
                <?php endif ?>
                </p>
            </footer>
        </div>
    </body>
</html>
