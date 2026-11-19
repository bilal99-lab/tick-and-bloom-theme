<?php
/**
 * Redesign helpers: printable "mini sheet" illustrations and shared data.
 *
 * The homepage shows small drawings of each printable (dots, boxes and bars).
 * They are decorative, so every wrapper that prints them is aria-hidden.
 *
 * @package Tick_Bloom
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Brand colours used by the redesign.
 */
function tb_colors() {
	return array(
		'ink'    => '#1B2340',
		'mint'   => '#63E0B0',
		'coral'  => '#FF7A6B',
		'lemon'  => '#FFE45C',
		'cobalt' => '#2F5BFF',
		'lilac'  => '#B9A6FF',
		'sky'    => '#9CC0FF',
	);
}

/**
 * One cell of a mini sheet.
 */
function tb_cell( $shape, $on, $color, $w, $h = null ) {
	$h     = null === $h ? $w : $h;
	$class = 'tb-c tb-c--' . $shape . ( $on ? ' is-on' : '' );
	$style = sprintf( 'width:%spx;height:%spx', $w, $h );
	if ( $on ) {
		$style .= ';background:' . $color;
	}
	return '<span class="' . esc_attr( $class ) . '" style="' . esc_attr( $style ) . '"></span>';
}

/**
 * A grey or coloured bar.
 */
function tb_bar( $w, $color = '', $h = 7 ) {
	$style = sprintf( 'width:%spx;height:%spx', $w, $h );
	if ( $color ) {
		$style .= ';background:' . $color;
	}
	return '<span class="tb-bar" style="' . esc_attr( $style ) . '"></span>';
}

/**
 * Return the rows of a mini sheet as HTML.
 *
 * @param string $kind  habit|soft|kids|year|meal|budget.
 * @param float  $k     Scale.
 * @param string $color Accent colour.
 * @param int    $max   Maximum rows (0 = all).
 */
function tb_sheet_rows( $kind, $k = 1, $color = '#63E0B0', $max = 0 ) {
	$c    = tb_colors();
	$rows = array();
	switch ( $kind ) {
		case 'habit':
			for ( $r = 0; $r < 8; $r++ ) {
				$row = tb_bar( round( 30 * $k ) );
				for ( $i = 0; $i < 11; $i++ ) {
					$row .= tb_cell( 'dot', $i < 8 && ( $r * 3 + $i * 5 ) % 7 < 5, $color, round( 10 * $k ) );
				}
				$rows[] = $row;
			}
			break;
		case 'soft':
			for ( $r = 0; $r < 6; $r++ ) {
				$row = '';
				for ( $i = 0; $i < 12; $i++ ) {
					$row .= tb_cell( 'dot', $r * 12 + $i < 34, $color, round( 10 * $k ) );
				}
				$rows[] = $row;
			}
			break;
		case 'kids':
			for ( $r = 0; $r < 7; $r++ ) {
				$rows[] = tb_cell( 'sq', $r < 4, $color, round( 14 * $k ) ) . tb_bar( round( ( 48 + ( $r * 23 ) % 60 ) * $k ), '', 8 );
			}
			break;
		case 'year':
			for ( $r = 0; $r < 11; $r++ ) {
				$row = '';
				for ( $i = 0; $i < 18; $i++ ) {
					$row .= tb_cell( 'sq', $r < 8 && ( $r * 7 + $i * 3 ) % 9 < 7, $color, round( 6 * $k ) );
				}
				$rows[] = $row;
			}
			break;
		case 'meal':
			for ( $r = 0; $r < 7; $r++ ) {
				$rows[] = tb_bar( round( 16 * $k ), $color, 7 )
					. tb_cell( 'sq', 0 === $r % 3, $c['lemon'], round( 36 * $k ), round( 12 * $k ) )
					. tb_cell( 'sq', false, '', round( 36 * $k ), round( 12 * $k ) )
					. tb_cell( 'sq', 0 === $r % 2, $c['lemon'], round( 36 * $k ), round( 12 * $k ) );
			}
			break;
		default: // budget.
			$rows[] = tb_bar( round( 70 * $k ), $color, 9 );
			for ( $r = 0; $r < 7; $r++ ) {
				$rows[] = tb_bar( round( ( 70 + ( $r * 17 ) % 30 ) * $k ) ) . '<span class="tb-grow"></span>' . tb_bar( round( 26 * $k ), 6 === $r ? $color : '' );
			}
	}
	if ( $max > 0 ) {
		$rows = array_slice( $rows, 0, $max );
	}
	$html = '';
	foreach ( $rows as $row ) {
		$html .= '<span class="tb-row">' . $row . '</span>';
	}
	return '<span class="tb-rows">' . $html . '</span>';
}

/**
 * The printables shown on the homepage, grouped by category.
 * URLs match the live site exactly (checked against the sitemap, 19 Nov 2026).
 */
function tb_library() {
	return array(
		'habits'     => array(
			array( 'Monthly Habit Tracker', 'This month', 'Track up to eight habits for a whole month on one page.', '/monthly-habit-tracker-printable/', 'habit', 'Most downloaded' ),
			array( 'Habit Tracker for Couples', 'Us, this month', 'Two columns, shared goals, one fridge.', '/habit-tracker-for-couples/', 'habit', 'For two' ),
			array( 'Habit Tracker for Students', 'Study habits', 'Study, sleep and screen time on one sheet.', '/habit-tracker-for-students/', 'habit', 'Students' ),
			array( 'Habit Tracker for ADHD', 'One thing at a time', 'Fewer boxes, bigger wins, less overwhelm.', '/habit-tracker-for-adhd-printable/', 'habit', 'Simple' ),
		),
		'challenges' => array(
			array( '75 Soft Challenge Tracker', '75 Soft', 'All 75 days and the four daily rules on one page.', '/75-soft-challenge-printable/', 'soft', 'Popular' ),
			array( '75 Medium Challenge Tracker', '75 Medium', 'The step up from 75 Soft, with room for notes.', '/75-medium-challenge-printable/', 'soft', 'Step up' ),
			array( '66-Day Habit Challenge', '66 days', 'The average time a new habit takes to stick.', '/66-day-habit-challenge-printable/', 'soft', 'Research-based' ),
		),
		'kids'       => array(
			array( 'Morning Routine for Kids', 'My morning', 'A checklist children can tick off by themselves.', '/morning-routine-checklist-for-kids-printable/', 'kids', 'Parents love it' ),
			array( 'Habit Tracker for Kids', 'My habits', 'Big boxes and simple goals for little hands.', '/habit-tracker-for-kids-free-printable-parents-guide/', 'kids', 'Ages 4 to 10' ),
			array( 'Morning Routine for Teens', 'Before school', 'Fewer steps, more independence.', '/morning-routine-checklist-for-teens/', 'kids', 'Teens' ),
		),
		'home'       => array(
			array( 'Weekly Meal Planner', 'This week we eat', 'Seven days of meals with the grocery list on the same sheet.', '/weekly-meal-planner-printable/', 'meal', 'Saves time' ),
			array( 'Monthly Budget Planner', 'Budget', 'Income, bills and spending on one page.', '/monthly-budget-planner-printable/', 'budget', 'Money' ),
			array( 'Weekly Planner', 'This week', 'Your whole week on one clear page.', '/weekly-planner-printable-free/', 'meal', 'Planner' ),
		),
		'year'       => array(
			array( 'Yearly Habit Tracker', 'One habit, one year', 'One habit, every day of the year. Low-ink copy included.', '/yearly-habit-tracker-printable/', 'year', 'New year pick' ),
			array( 'Daily Planner for Students', 'Today', 'Classes, homework and one daily goal.', '/daily-planner-printable-for-students/', 'kids', 'Students' ),
		),
	);
}
