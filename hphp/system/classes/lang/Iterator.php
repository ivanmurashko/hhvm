<?php

// This doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.iterator.php )
 *
 * Interface for external iterators or objects that can be iterated
 * themselves internally.
 *
 */
interface Iterator extends Traversable {
  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/iterator.current.php )
   *
   * Returns the current element.
   *
   * @return     mixed   Can return any type.
   */
  public function current();
  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/iterator.key.php )
   *
   * Returns the key of the current element.
   *
   * @return     mixed   Returns scalar on success, or NULL on failure.
   */
  public function key();
  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/iterator.next.php )
   *
   * Moves the current position to the next element.
   *
   * This method is called after each foreach loop.
   *
   * @return     mixed   Any returned value is ignored.
   */
  public function next();
  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/iterator.rewind.php )
   *
   * Rewinds back to the first element of the Iterator.
   *
   * This is the first method called when starting a foreach loop. It will
   * not be executed after foreach loops.
   *
   * @return     mixed   Any returned value is ignored.
   */
  public function rewind();
  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/iterator.valid.php )
   *
   * This method is called after Iterator::rewind() and Iterator::next() to
   * check if the current position is valid.
   *
   * @return     mixed   The return value will be casted to boolean and then
   *                     evaluated. Returns TRUE on success or FALSE on
   *                     failure.
   */
  public function valid();
}

