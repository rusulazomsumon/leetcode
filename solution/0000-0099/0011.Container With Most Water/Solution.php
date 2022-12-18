class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
      $maxArea = 0;
      $left = 0;
      $right = count($height) - 1;
      while ($left < $right) {
          $area = min($height[$left], $height[$right]) * ($right - $left);
          $maxArea = max($maxArea, $area);
          if ($height[$left] < $height[$right]) {
              $left++;
          } else {
              $right--;
          }
      }
      return $maxArea;
    }
}
