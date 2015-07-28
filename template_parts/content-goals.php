<section id="goals" class="site-padding-double" ng-controller="GoalsController" in-view="showThem($inview)" in-view-options="{ offsetTop: 500 }">
  <div class="container">
    <div class="row hide-xs">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="goals-text">
          <h3 class="site-title-centered">Alcanza tus metas financieras</h3>

          <p>¿Cuánto quieres ahorrar y para qué? ¿En cuánto tiempo quieres alcanzar tu meta?</p>

          <p>Define tus metas de ahorro, podrás darles seguimiento y saber qué tanto te vas <br/>acercando a
            cumplirlas.
          </p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 gray-bg-right">
        <div class="goal" ng-class="getClass(vacationsMax, vacationsValue)">
          <div class="slider-wrapper">
            <div
            round-progress
            max="vacationsMax"
            current="vacationsValue"
            color="{{getColor(vacationsMax, vacationsValue)}}"
            bgcolor="#c7cbd2"
            radius="75"
            stroke="13"
            clockwise="false"
            iterations="50"
            animation="easeInOutQuart">
          </div>
          <div class="goal-meta">
            <div ng-hide="getClass(vacationsMax, vacationsValue) == 'green'"><img src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-1.png"
              alt=""/></div>
              <div ng-show="getClass(vacationsMax, vacationsValue) == 'green'"><img
                src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-1-color.png" alt=""/></div>
                <span
                ng-hide="getClass(vacationsMax, vacationsValue) == 'green'">{{vacationsValue | currency:'$':0}}</span>
                <img ng-show="getClass(vacationsMax, vacationsValue) == 'green'" src="<?php bloginfo('template_directory'); ?>/public/images/check.png" alt=""/>
              </div>
            </div>
            <div class="goal-amount">
              <h5>Meta</h5>
              <span>{{vacationsMax | currency:'$':0}}</span>
            </div>
            <p>Vacaciones</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 gray-bg-right">
          <div class="goal" ng-class="getClass(universityMax, universityValue)">
            <div class="slider-wrapper">
              <div
              round-progress
              max="universityMax"
              current="universityValue"
              color="{{getColor(universityMax, universityValue)}}"
              bgcolor="#c7cbd2"
              radius="75"
              stroke="13"
              clockwise="false"
              iterations="50"
              animation="easeInOutQuart">
            </div>
            <div class="goal-meta">
              <div ng-hide="getClass(universityMax, universityValue) == 'green'"><img
                src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-2.png" alt=""/></div>
                <div ng-show="getClass(universityMax, universityValue) == 'green'"><img
                  src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-2-color.png" alt=""/></div>
                  <span
                  ng-hide="getClass(universityMax, universityValue) == 'green'">{{universityValue | currency:'$':0}}</span>
                  <img ng-show="getClass(universityMax, universityValue) == 'green'" src="<?php bloginfo('template_directory'); ?>/public/images/check.png"
                  alt=""/>
                </div>
              </div>
              <div class="goal-amount">
                <h5>Meta</h5>
                <span>{{universityMax | currency:'$':0}}</span>
              </div>
              <p>Matrícula Universidad</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 gray-bg-right">
            <div class="goal" ng-class="getClass(concertMax, concertValue)">
              <div class="slider-wrapper">
                <div
                round-progress
                max="concertMax"
                current="concertValue"
                color="{{getColor(concertMax, concertValue)}}"
                bgcolor="#c7cbd2"
                radius="75"
                stroke="13"
                clockwise="false"
                iterations="50"
                animation="easeInOutQuart">
              </div>
              <div class="goal-meta">
                <div ng-hide="getClass(concertMax, concertValue) == 'green'"><img src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-3.png"
                  alt=""/></div>
                  <div ng-show="getClass(concertMax, concertValue) == 'green'"><img
                    src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-3-color.png" alt=""/></div>
                    <span ng-hide="getClass(concertMax, concertValue) == 'green'">{{concertValue | currency:'$':0}}</span>
                    <img ng-show="getClass(concertMax, concertValue) == 'green'" src="<?php bloginfo('template_directory'); ?>/public/images/check.png" alt=""/>
                  </div>
                </div>
                <div class="goal-amount">
                  <h5>Meta</h5>
                  <span>{{concertMax | currency:'$':0}}</span>
                </div>
                <p>Concierto</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <div class="goal" ng-class="getClass(carMax, carValue)">
                <div class="slider-wrapper">
                  <div
                  round-progress
                  max="carMax"
                  current="carValue"
                  color="{{getColor(carMax, carValue)}}"
                  bgcolor="#c7cbd2"
                  radius="75"
                  stroke="13"
                  clockwise="false"
                  iterations="50"
                  animation="easeInOutQuart">
                </div>
                <div class="goal-meta">
                  <div ng-hide="getClass(carMax, carValue) == 'green'"><img src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-4.png" alt=""/>
                  </div>
                  <div ng-show="getClass(carMax, carValue) == 'green'"><img src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-4-color.png"
                    alt=""/></div>
                    <span ng-hide="getClass(carMax, carValue) == 'green'">{{carValue | currency:'$':0}}</span>
                    <img ng-show="getClass(carMax, carValue) == 'green'" src="<?php bloginfo('template_directory'); ?>/public/images/check.png" alt=""/>
                  </div>
                </div>
                <div class="goal-amount">
                  <h5>Meta</h5>
                  <span>{{carMax | currency:'$':0}}</span>
                </div>
                <p>Arreglo Carro</p>
              </div>
            </div>
          </div>
          <div class="row show-xs">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="goals-text">
                <h3 class="site-title-centered">Alcanza tus metas financieras</h3>

                <p>¿Cuánto quieres ahorrar y para qué? ¿En cuánto tiempo quieres alcanzar tu meta?</p>

                <p>Define tus metas de ahorro, podrás darles seguimiento y saber qué tanto te vas <br/>acercando a
                  cumplirlas.
                </p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="goals-slider owl-carousel" owl-single-nav>
                <div class="goal" ng-class="getClass(vacationsMax, vacationsValue)">
                  <div class="slider-wrapper">
                    <div
                    round-progress
                    max="vacationsMax"
                    current="vacationsValue"
                    color="{{getColor(vacationsMax, vacationsValue)}}"
                    bgcolor="#c7cbd2"
                    radius="75"
                    stroke="13"
                    clockwise="false"
                    iterations="50"
                    animation="easeInOutQuart">
                  </div>
                  <div class="goal-meta">
                    <div ng-hide="getClass(vacationsMax, vacationsValue) == 'green'"><img
                      src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-1.png"
                      alt=""/></div>
                      <div ng-show="getClass(vacationsMax, vacationsValue) == 'green'"><img
                        src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-1-color.png" alt=""/></div>
                        <span
                        ng-hide="getClass(vacationsMax, vacationsValue) == 'green'">{{vacationsValue | currency:'$':0}}</span>
                        <img ng-show="getClass(vacationsMax, vacationsValue) == 'green'" src="<?php bloginfo('template_directory'); ?>/public/images/check.png"
                        alt=""/>
                      </div>
                    </div>
                    <div class="goal-amount">
                      <h5>Meta</h5>
                      <span>{{vacationsMax | currency:'$':0}}</span>
                    </div>
                    <p>Vacaciones</p>
                  </div>
                  <div class="goal" ng-class="getClass(universityMax, universityValue)">
                    <div class="slider-wrapper">
                      <div
                      round-progress
                      max="universityMax"
                      current="universityValue"
                      color="{{getColor(universityMax, universityValue)}}"
                      bgcolor="#c7cbd2"
                      radius="75"
                      stroke="13"
                      clockwise="false"
                      iterations="50"
                      animation="easeInOutQuart">
                    </div>
                    <div class="goal-meta">
                      <div ng-hide="getClass(universityMax, universityValue) == 'green'"><img
                        src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-2.png" alt=""/></div>
                        <div ng-show="getClass(universityMax, universityValue) == 'green'"><img
                          src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-2-color.png" alt=""/></div>
                          <span
                          ng-hide="getClass(universityMax, universityValue) == 'green'">{{universityValue | currency:'$':0}}</span>
                          <img ng-show="getClass(universityMax, universityValue) == 'green'" src="<?php bloginfo('template_directory'); ?>/public/images/check.png"
                          alt=""/>
                        </div>
                      </div>
                      <div class="goal-amount">
                        <h5>Meta</h5>
                        <span>{{universityMax | currency:'$':0}}</span>
                      </div>
                      <p>Matrícula Universidad</p>
                    </div>
                    <div class="goal" ng-class="getClass(concertMax, concertValue)">
                      <div class="slider-wrapper">
                        <div
                        round-progress
                        max="concertMax"
                        current="concertValue"
                        color="{{getColor(concertMax, concertValue)}}"
                        bgcolor="#c7cbd2"
                        radius="75"
                        stroke="13"
                        clockwise="false"
                        iterations="50"
                        animation="easeInOutQuart">
                      </div>
                      <div class="goal-meta">
                        <div ng-hide="getClass(concertMax, concertValue) == 'green'"><img src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-3.png"
                          alt=""/></div>
                          <div ng-show="getClass(concertMax, concertValue) == 'green'"><img
                            src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-3-color.png" alt=""/></div>
                            <span ng-hide="getClass(concertMax, concertValue) == 'green'">{{concertValue | currency:'$':0}}</span>
                            <img ng-show="getClass(concertMax, concertValue) == 'green'" src="<?php bloginfo('template_directory'); ?>/public/images/check.png" alt=""/>
                          </div>
                        </div>
                        <div class="goal-amount">
                          <h5>Meta</h5>
                          <span>{{concertMax | currency:'$':0}}</span>
                        </div>
                        <p>Concierto</p>
                      </div>
                      <div class="goal" ng-class="getClass(carMax, carValue)">
                        <div class="slider-wrapper">
                          <div
                          round-progress
                          max="carMax"
                          current="carValue"
                          color="{{getColor(carMax, carValue)}}"
                          bgcolor="#c7cbd2"
                          radius="75"
                          stroke="13"
                          clockwise="false"
                          iterations="50"
                          animation="easeInOutQuart">
                        </div>
                        <div class="goal-meta">
                          <div ng-hide="getClass(carMax, carValue) == 'green'"><img src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-4.png" alt=""/>
                          </div>
                          <div ng-show="getClass(carMax, carValue) == 'green'"><img src="<?php bloginfo('template_directory'); ?>/public/images/ico-goal-4-color.png"
                            alt=""/></div>
                            <span ng-hide="getClass(carMax, carValue) == 'green'">{{carValue | currency:'$':0}}</span>
                            <img ng-show="getClass(carMax, carValue) == 'green'" src="<?php bloginfo('template_directory'); ?>/public/images/check.png" alt=""/>
                          </div>
                        </div>
                        <div class="goal-amount">
                          <h5>Meta</h5>
                          <span>{{carMax | currency:'$':0}}</span>
                        </div>
                        <p>Arreglo Carro</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>