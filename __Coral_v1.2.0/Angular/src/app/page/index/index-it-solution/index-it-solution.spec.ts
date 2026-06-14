import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IndexItSolution } from './index-it-solution';

describe('IndexItSolution', () => {
  let component: IndexItSolution;
  let fixture: ComponentFixture<IndexItSolution>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [IndexItSolution]
    })
    .compileComponents();

    fixture = TestBed.createComponent(IndexItSolution);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
